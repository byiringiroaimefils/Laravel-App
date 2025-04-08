<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = "cities";
    protected $fillable = ['country_id','city_name','city_code'];

    public function country()
{
    return $this->belongsToMany(country::class);
}
}
