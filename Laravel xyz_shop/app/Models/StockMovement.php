<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type', // 'in' or 'out'
        'quantity',
        'reference',
        'notes'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
} 