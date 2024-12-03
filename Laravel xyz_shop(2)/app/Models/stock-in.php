<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDataout extends Model
{
    protected $fillable = ['product_id', 'Quantity', 'Price','date'];
    public function productData()
    {
        return $this->belongsTo(ProductData::class, 'product_id');
    }
}
