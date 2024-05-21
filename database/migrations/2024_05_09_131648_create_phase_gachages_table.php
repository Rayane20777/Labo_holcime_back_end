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
            $table->float('temperature')->nullable();
            $table->float('temperature_salle')->nullable();
            $table->float('humidite')->nullable();
            $table->float('p_prisme')->nullable();
            $table->time('temps_gachage')->nullable();
            $table->time('temps_casse')->nullable();
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
