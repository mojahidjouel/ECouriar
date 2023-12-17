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
            $table->string('invoice_no')->nullable();
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
            
            $table->decimal('base_price',10,2)->nullable();
            $table->decimal('unit_price',10,2)->nullable();
            $table->decimal('shipping_cost',10,2)->nullable();
            $table->decimal('total_cost',10,2)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('customer_id');
            $table->integer('status')->default(0)->comment('0=Pending,1=picked up,2=delivered');
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
