<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table = "country";
    protected $fillable = ['country_name', 'country_code'];
    public function city()
    {
        return $this->hasMany(city::class);
    }

}
