<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stockIn()
    {
        return view('stock-in');
    }

    public function stockOut()
    {
        return view('stock-out');
    }
}
