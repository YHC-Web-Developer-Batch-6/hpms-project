<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InstallmentItem;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertiesArchive = Property::where('is_archive', 1);
        $propertiesUnarchive = Property::where('is_archive', 0);

        if (request()->get('sold') !== null) {
            $propertiesArchive = Property::where('is_archive', 1)->where('is_sold', request('sold'));
            $propertiesUnarchive = Property::where('is_archive', 0)->where('is_sold', request('sold'));
        }

        $propertiesArchive = $propertiesArchive->orderByDesc('created_at')->get();
        $propertiesUnarchive = $propertiesUnarchive->orderByDesc('created_at')->get();

        return view('property.index', [
            'propertiesArchive' => $propertiesArchive,
            'propertiesUnarchive' => $propertiesUnarchive
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $property = Property::create([
                'user_id' => auth()->user()->id,
                'title'=> $request->title,
                'type'=> $request->type,
                'certification'=> $request->certification,
                'price'=> intval(preg_replace("/[^0-9]/", "", $request->price)),
                'property_size'=> $request->property_size . 'm²',
                'surface_size'=> $request->surface_size . 'm²',
                'location'=> $request->location,
                'description'=> $request->description,
                'is_sold'=> 0,
                'is_archive'=> 0
            ]);

            if ($request->hasFile('medias')) {
                foreach ($request->medias as $media) {
                    if ($media->isValid()) {
                        $property->addMedia($media)
                            ->usingFileName(Str::random(8) . "." . $media->extension())
                            ->toMediaCollection('property');
                    }
                }
            }

            foreach ($request->installments as $installmentMonth) {
                $price = intval(preg_replace("/[^0-9]/", "", $property->price));
                $dp = intval(preg_replace("/[^0-9]/", "", $property->down_payment));
    
                $plafon = $price - $dp;
                $installmentPrice = ($plafon + ($plafon * 10 / 100)) / intval($installmentMonth);
    
                InstallmentItem::create([
                    'property_id' => $property->id,
                    'name' => 'Cicilan ' . $installmentMonth . ' bulan',
                    'price' => intval($installmentPrice),
                    'down_payment' => $request->down_payment,
                ]);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return redirect()->route('property.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        $installmentItems = InstallmentItem::where('property_id', $property->id)->get();

        return view ('property.edit', [
                'property' => $property,
                'installmentNames' => $installmentItems->pluck('name')->toArray(),
                'downPayment' => $installmentItems->pluck('down_payment')->first(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        try {
            DB::beginTransaction();
            $property->update([
                'title'=> $request->title,
                'type'=> $request->type,
                'certification'=> $request->certification,
                'price'=> $request->price,
                'property_size'=> $request->property_size . 'm²',
                'surface_size'=> $request->surface_size . 'm²',
                'location'=> $request->location,
                'description'=> $request->description,
            ]);
            
            InstallmentItem::where('property_id', $property->id)->delete();
            
            foreach ($request->installments as $installment) {
                $price = $property->price;
                $dp = $request->down_payment;
    
                $plafon = $price - $dp;
                $cicilan = ($plafon + ($plafon * 10 / 100)) / intval($installment);
    
                InstallmentItem::create([
                    'property_id' => $property->id,
                    'name' => 'Cicilan ' . $installment . ' bulan',
                    'price' => intval($cicilan),
                    'down_payment' => $request->down_payment,
                ]);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        return redirect()->route('property.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }

    public function archive($id)
    {
        $property = Property::find($id);
        $property->update([
            'is_archive' => !$property->is_archive,
        ]);
        
        return redirect()->route('property.index');
    }
}
