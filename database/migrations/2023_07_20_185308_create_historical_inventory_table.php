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
        Schema::create('historical_inventory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->date('entry_date');
            $table->date('departure_date');
            $table->timestamps();
       
       //references

       $table->foreign('product_id')->references('product_id')->on('inventory');
       $table->foreign('quantity')->references('quantity')->on('inventory');
       $table->foreign('entry_date')->references('entry_date')->on('inventory');
       $table->foreign('departure_date')->references('departure_date')->on('inventory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historical_inventory');
    }
};
