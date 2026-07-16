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
    Schema::create('consultation_interests', function (Blueprint $table) {
        $table->id();

        $table->foreignId('consultation_request_id')
              ->constrained('consultation_requests')
              ->cascadeOnDelete();

        $table->string('category');

        $table->string('interest');

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_interests');
    }
};
