<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    protected $fillable = [
        'productName'
    ];

    public function stock_ins(){
        return $this->hasMany(StockIn::class);
    }
    public function stock_outs(){
        return $this->hasMany(StockOut::class);
    }

}


