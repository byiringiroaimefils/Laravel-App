<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class userModel extends Model
{
    protected $table = "users_management";
    protected $fillable = [
        "name",
        "email",
        "password"
    ];

}
