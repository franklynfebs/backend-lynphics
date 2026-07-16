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
        Schema::create('consultation_requests', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('business_name');
            $table->string('email');
            $table->string('phone');

            $table->string('industry')->nullable();
            $table->string('company_size')->nullable();
            $table->string('website')->nullable();

            $table->text('business_challenge')->nullable();

            $table->string('investment_range')->nullable();
            $table->string('timeline')->nullable();

            $table->string('preferred_contact_method')->nullable();

            $table->string('referral_source')->nullable();

            $table->string('status')->default('New');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_requests');
    }
};