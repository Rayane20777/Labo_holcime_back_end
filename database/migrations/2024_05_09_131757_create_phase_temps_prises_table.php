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
        Schema::create('phase_temps_prises', function (Blueprint $table) {
            $table->id();
            $table->float('mass_volumique')->nullable();
            $table->integer('déput_de_prisep')->nullable();
            $table->integer('fin_de_prise')->nullable();
            $table->float('expention')->nullable();
            $table->float('eau_gach')->nullable();
            $table->foreignId('analyse_id')->constrained('analyses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phase_temps_prises');
    }
};
