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
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('status')->default('0');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_id');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone_number');
            $table->string('email');
            $table->string('shipping_price');
            $table->string('postal_code');
            $table->string('country');
            $table->string('total_price');
            $table->timestamps();
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
