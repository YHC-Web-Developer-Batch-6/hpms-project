<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('finance.index');
    }

    public function show()
    {
        return view('finance.show');
    }
    
}
