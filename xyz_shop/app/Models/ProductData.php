<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductData extends Model
{
    
    protected $fillable = ['productName'];

    public function productDatain()
    {
        return $this->hasMany(ProductDatain::class, 'product_id');
    }

    public function productDataout()
    {
        return $this->hasMany(ProductDataout::class, 'product_id');
    }

}

