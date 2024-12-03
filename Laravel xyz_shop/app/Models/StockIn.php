<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
    protected $fillable = ['product_id', 'quantity','price','date'];

    // A stock-out record belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
