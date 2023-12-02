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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_city')->index();
            $table->foreign('from_city')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedBigInteger('to_city')->index();
            $table->foreign('to_city')->references('id')->on('cities')->onDelete('cascade');
            $table->string('product_name')->nullable();
            $table->text('product_description')->nullable();
            $table->decimal('product_weight')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('sender_address')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            
            $table->unsignedBigInteger('base_price')->index();
            $table->foreign('base_price')->references('id')->on('prices')->onDelete('cascade');
            $table->unsignedBigInteger('unit_size')->index();
            $table->foreign('unit_size')->references('id')->on('prices')->onDelete('cascade');
            $table->unsignedBigInteger('shipping_cost')->index();
            $table->foreign('shipping_cost')->references('id')->on('prices')->onDelete('cascade');
            
            $table->decimal('total_cost')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
