<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockInsTable extends Migration
{
    public function up()
    {
        Schema::create('stock_ins', function (Blueprint $table) {
            $table->id();  // Creates auto-incrementing 'id'
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');  // Foreign key to 'products' table
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_ins');
    }
}
