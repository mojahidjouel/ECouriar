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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('company_email')->nullable();
            $table->text('company_address')->nullable();
            $table->text('company_city')->nullable();
            $table->text('company_state')->nullable();
            $table->text('company_pin')->nullable();
            $table->text('company_country')->nullable();
            $table->string('logo_image')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
