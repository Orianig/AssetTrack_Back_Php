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
        Schema::create('historical_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('provider_id');
            $table->decimal('price', 10, 2);
            $table->integer('discount');
            $table->timestamps();

            //references

            $table->foreign('product_id')->references('id')->on('providers');
            $table->foreign('provider_id')->references('id')->on('products');
            $table->foreign('price')->references('price')->on('products');
            $table->foreign('discount')->references('discount')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historical_products');
    }
};
