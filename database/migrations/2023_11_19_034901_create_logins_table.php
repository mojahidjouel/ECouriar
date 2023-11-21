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
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password');
            $table->string('status')->boolean();
            $table->string('check_login')->nullable();
            $table->string('change_password')->nullable();
            $table->string('forgot_password');
            $table->string('add_login');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};
