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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->nullable();
            $table->string('title')->nullable();
            $table->string('comment')->nullable();
            $table->date('date')->nullable();
            $table->string('add_comment')->nullable();
            $table->string('get_comment')->nullable();
            $table->string('search_comment')->nullable();
            $table->string('update_comment')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
