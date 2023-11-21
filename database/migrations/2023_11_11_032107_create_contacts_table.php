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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contract_number')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('charge_type')->enum('weight','distance','fixed');
            $table->decimal('amount')->default('0');
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->string('collect_form')->nullable();
            $table->string('delivered_to')->nullable();
            $table->decimal('total_weight')->nullable();
            $table->decimal('total_distance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
