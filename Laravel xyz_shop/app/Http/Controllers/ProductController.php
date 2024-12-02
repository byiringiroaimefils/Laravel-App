<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('product', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'productName' => 'required',
        ]);
        Products::create($data);
        return redirect()->action([ProductController::class, 'index']);
    }
    public function delete($id)
    {
        $productDete = Products::find($id);
        $productDete->delete();
        return redirect()->action([ProductController::class, 'index']);
    }
}
