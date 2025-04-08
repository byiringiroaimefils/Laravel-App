<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('processor', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('desktop_id');
            $table->string('processor_name');
            $table->string('processor_price');
            $table->timestamps();
            $table->foreign('desktop_id')->references('id')->on('desktop');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
