<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'current_stock')) {
                $table->integer('current_stock')->default(0);
            }
            if (!Schema::hasColumn('products', 'unit_price')) {
                $table->decimal('unit_price', 10, 2)->default(0.00);
            }
            if (!Schema::hasColumn('products', 'min_stock_threshold')) {
                $table->integer('min_stock_threshold')->default(10);
            }
            if (!Schema::hasColumn('products', 'sku')) {
                $table->string('sku')->unique();
            }
            if (!Schema::hasColumn('products', 'category_id')) {
                $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['current_stock', 'unit_price', 'min_stock_threshold', 'sku', 'category_id']);
        });
    }
};