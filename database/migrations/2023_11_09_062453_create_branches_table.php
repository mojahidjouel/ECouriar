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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('branch_email')->unique();
            $table->string('branch_phone')->unique();
            $table->text('branch_address')->nullable();
            $table->text('branch_city')->nullable();
            $table->text('branch_state')->nullable();
            $table->text('branch_pin')->nullable();
            $table->text('branch_country')->nullable();
            $table->string('logo_image')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
