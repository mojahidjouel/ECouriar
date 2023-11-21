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
        Schema::create('couriar_information', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_branch_id')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_email')->unique();
            $table->string('sender_phone')->nullable();
            $table->text('sender_address')->nullable();
            $table->string('sender_branch_staff_id')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('receiver_branch_staff_id')->nullable();
            $table->string('payment_receiver_id')->nullable();
            $table->string('payment_branch_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_method_name')->nullable();
            $table->string('payment_transaction_id')->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('payment_balance')->nullable();
            $table->string('payment_transaction_image')->nullable();
            $table->string('payment_note')->nullable();
            $table->string('code')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->string('status')->nullable();
           
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couriar_information');
    }
};
