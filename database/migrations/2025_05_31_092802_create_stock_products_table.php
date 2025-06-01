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
        Schema::create('stock_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->bigInteger('size');
            $table->bigInteger('stock');
//            $table->bigInteger('size_39');
//            $table->bigInteger('size_40');
//            $table->bigInteger('size_41');
//            $table->bigInteger('size_42');
//            $table->bigInteger('size_43');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_products');
    }
};
