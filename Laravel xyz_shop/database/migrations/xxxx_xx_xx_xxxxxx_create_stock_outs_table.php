<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockOutsTable extends Migration
{
    public function up()
    {
        Schema::create('stock_outs', function (Blueprint $table) {
            $table->id();  // Creates auto-incrementing 'id'
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');  // Foreign key to 'products' table
            $table->integer('quantity');
            $table->decimal('price', 10, 2)->nullable();
            $table->date('date');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_outs');
    }
}
