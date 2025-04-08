<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class desktop extends Model
{

    protected $table = "desktop";
        public function processor()
        {
            return $this->hasOne(processor::class);
        }

}
