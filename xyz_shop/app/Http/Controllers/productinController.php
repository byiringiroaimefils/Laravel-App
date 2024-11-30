<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductInController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'productName' => 'required',
            'quantity' => 'required|numeric',
            'unitPrice' => 'required|numeric',
            'date' => 'required|date',
        ]);

        // Logic to store product in the database
        return redirect()->route('stockIn')->with('success', 'Product added successfully.');
    }
}
