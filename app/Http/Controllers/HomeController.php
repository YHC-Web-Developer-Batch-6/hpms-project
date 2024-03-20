<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function dashboard()
    {
        $totalProperty = Property::all()->count();

        return view('dashboard', [
            'totalProperty' => $totalProperty,
        ]);
    }

    public function finance()
    {
        return view('finance.index');
    }
}
