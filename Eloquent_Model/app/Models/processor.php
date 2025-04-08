<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class processor extends Model
{
    protected $table = "processor";

        public function desktop()
    {
        return $this->belongsTo(desktop::class);
    }
}
