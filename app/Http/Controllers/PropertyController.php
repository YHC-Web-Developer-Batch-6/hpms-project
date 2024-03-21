<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertiesArchive = Property::where('is_archive', 1)->get();
        $propertiesUnarchive = Property::where('is_archive', 0)->get();

        if (request()->get('sold') !== null) {
            $propertiesArchive = Property::where('is_archive', 1)->where('is_sold', request('sold'))->get();
            $propertiesUnarchive = Property::where('is_archive', 0)->where('is_sold', request('sold'))->get();
        }

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
        $property = Property::create([
            'user_id' => auth()->user()->id,
            'title'=> $request->title,
            'type'=> $request->type,
            'certification'=> $request->certification,
            'price'=> $request->price,
            'property_size'=> $request->property_size,
            'surface_size'=> $request->surface_size,
            'location'=> $request->location,
            'description'=> $request->description,
            'is_sold'=> 0,
            'is_archive'=> 0
        ]);
        // dd($request->all());

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        return view ('property.update');
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
