<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

// Model for todo with structure of table
class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = [
      'task_name'
    ];
}
