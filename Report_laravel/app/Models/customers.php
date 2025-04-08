<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table='customers';
    public function products(){
        return $this->hasMany(Products::class,'customer_id');
    }
}
