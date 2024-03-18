<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $active = 'dahsboard';

        if (auth()->user()->hasRole('admin')) {
            return view('dashboard', compact('active'));
        }

        return view('customer.index');
    }
}
