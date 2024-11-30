<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productDataout', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('productData')->onDelete('cascade');
            $table->integer("Quantity");
            $table->integer("Price");
            $table->date("Date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productOut');
    }
};
