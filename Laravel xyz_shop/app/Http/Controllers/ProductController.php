<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\StockIn;
use App\Models\StockOut;
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

    public function stockIn(Request $request, $id)
    {
        $data = $request->validate([
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $stockIn = new StockIn($data);
        $stockIn->product_id = $id;
        $stockIn->save();

        return redirect()->action([ProductController::class, 'index']);
    }

    public function stockOut(Request $request, $id)
    {
        $data = $request->validate([
            'quantity' => 'required|integer',
        ]);

        $stockOut = new StockOut($data);
        $stockOut->product_id = $id;
        $stockOut->save();

        return redirect()->action([ProductController::class, 'index']);
    }
}
