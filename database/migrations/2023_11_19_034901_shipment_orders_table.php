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
        Schema::create('shipment_orders', function (Blueprint $table) {
            $table->id();
            $table->string('from_city')->nullable();
            $table->string('to_city')->nullable();
            $table->string('weight')->nullable();
            $table->date('date')->nullable();
            $table->string('add_shipment')->nullable();
            $table->string('get_shipment')->nullable();
            $table->string('search_shipment')->nullable();
            $table->string('update_shipment')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_email')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_orders');
    }
};
