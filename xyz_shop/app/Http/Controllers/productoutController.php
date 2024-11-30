<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductOutController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:product_data,id',
            'quantity' => 'required|numeric',
            'date' => 'required|date',
        ]);

        // Logic to store product out in the database
        return redirect()->route('stockOut')->with('success', 'Product removed successfully.');
    }
}
