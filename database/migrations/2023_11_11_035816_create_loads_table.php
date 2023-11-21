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
        Schema::create('loads', function (Blueprint $table) {
            $table->id('integer');
            $table->integer('contract_id');
            $table->integer('driver_id');
            $table->integer('customer_id');
            $table->string('asset_id')->enum('weight','distance','fixed');
            $table->integer('product_id');
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('finish_time')->nullable();
            $table->decimal('total_weight')->nullable();
            $table->decimal('total_distance')->nullable();
            $table->string('charge_type')->enum('weight','distance','fixed');
            $table->decimal('amount')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loads');
    }
};
