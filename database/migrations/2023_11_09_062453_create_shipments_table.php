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
            $table->string('from_city')->nullable();
            $table->string('to_city')->nullable();
            $table->string('product_name')->nullable();
            $table->text('product_description')->nullable();
            $table->decimal('product_weight')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('sender_address')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->decimal('base_price')->nullable();
            $table->decimal('unit_price')->nullable();;
            $table->decimal('shipping_cost')->nullable();
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
