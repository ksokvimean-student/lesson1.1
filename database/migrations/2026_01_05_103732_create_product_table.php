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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id')->primary_key()->increment();;
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->timestamps();
            $table->string('name',length:150); 
            $table->text('description');  
            $table->integer('stock_qty');
            $table->decimal('price', total: 10, places: 2); 
            // $table->dateTime('updated_at');  
            $table->string('image_url',length:255)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
