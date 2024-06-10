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
        Schema::create('phase_gachages', function (Blueprint $table) {
            $table->id();
            $table->string('temperature')->nullable();
            $table->string('temperature_salle')->nullable();
            $table->string('humidite')->nullable();
            $table->string('p_prisme')->nullable();
            $table->string('temps_gachage')->nullable();
            $table->string('temps_casse')->nullable();
            $table->foreignId('analyse_id')->constrained('analyses')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phase_gachages');
    }
};
