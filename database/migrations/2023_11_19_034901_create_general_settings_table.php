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
            Schema::create('general_settings', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('header_title')->nullable();
                $table->string('header_subtitle')->nullable();
                $table->string('testimonial_title')->nullable();
                $table->string('search_courier_title')->nullable();
                $table->text('search_courier_details')->nullable();
                $table->string('about_keyword')->nullable();
                $table->string('about_title')->nullable();
                $table->text('about_details')->nullable();
                $table->string('gallery_title')->nullable();
                $table->text('gallery_details')->nullable();
                $table->string('service_sitle')->nullable();
                $table->text('service_details')->nullable();
                $table->text('footer_text')->nullable();
                $table->string('contact_title')->nullable();
                $table->string('contact_address')->nullable();
                $table->string('contact_phone')->nullable();
                $table->string('contact_email')->nullable();
                $table->string('address')->nullable();
                $table->string('color_code')->nullable();
                $table->boolean('email_notification')->boolean();
                $table->text('email_template')->nullable();
                $table->string('sms_api')->nullable();
                $table->integer('departure_courier')->nullable();
                $table->integer('upcoming_courier')->nullable();
                $table->integer('total_deliver')->nullable();
                $table->boolean('sms_notification')->boolean();
                $table->boolean('registration_verification')->boolean();
                $table->boolean('email_verification')->boolean();
                $table->boolean('Sms_Verification')->boolean();
                $table->string('base_currency')->nullable();
                $table->string('base_currency_symbol')->nullable();
                $table->unsignedBigInteger('Created_by');
                $table->unsignedBigInteger('Updated_by');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
