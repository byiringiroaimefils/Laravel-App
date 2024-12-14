<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller

// Fucntions for Stock-in.


{
    public function stockIn()
    {
        return view('stock-in.stock-in');
    }


// Fucntions for Stock-out.


    public function stockOut()
    {
        return view('stock-out.stock-out');
    }
}
