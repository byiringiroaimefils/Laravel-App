<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
    use HasFactory;
    protected $table='auth';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
