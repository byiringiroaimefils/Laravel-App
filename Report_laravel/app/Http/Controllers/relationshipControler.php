<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\products;
use Illuminate\Database\Eloquent\Builder;

class relationshipControler extends Controller
{
    public function show_report(Request $request)
    {
        $customers = customers::whereHas('products', function ($query) use ($request) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        })->get();
       return view('report',compact('customers'));
}

}
