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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('order_detail_id')->primary_key()->increment();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->integer('quantity');
            $table->decimal('price', total: 10, places: 2); 
            $table->enum('status',['Pending','Processing','Shipped','Delivered','Cancelled']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
