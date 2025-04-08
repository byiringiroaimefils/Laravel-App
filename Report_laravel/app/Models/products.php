<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }
}
