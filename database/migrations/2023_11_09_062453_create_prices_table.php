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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('to_city')->index();
            $table->foreign('to_city')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedBigInteger('from_city')->index();
            $table->foreign('from_city')->references('id')->on('cities')->onDelete('cascade');
            $table->double('base_price')->nullable();
            $table->string('unit_size')->nullable();
            $table->decimal('unit_price')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
