<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class register extends Model
{
    protected $table = "author";
    protected $fillable = [
        'username',
        'email',
        'password'
    ];
}
