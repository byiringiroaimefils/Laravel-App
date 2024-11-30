<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductData;

class ProductController extends Controller
{
    public function productData(Request $request ){
        $data = $request->validate([
            'productName' => 'required',
        ]);
        ProductData::create($data);
        return redirect()->route('product');
    }
}
