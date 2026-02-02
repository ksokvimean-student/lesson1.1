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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id')->primary_key()->increment();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('order_date');
            $table->enum('status',['Pending','Processing','Shipped','Delivered','Cancelled']);
            $table->decimal('total_amount', total: 10, places: 2); 
            $table->enum('payment_method',['Cash','Credit Card','PayPal','Bank Tranfer']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
