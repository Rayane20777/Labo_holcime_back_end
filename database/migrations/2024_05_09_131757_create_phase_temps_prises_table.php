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
            $table->string('mass_volumique')->nullable();
            $table->string('debut_de_prise')->nullable();
            $table->string('fin_de_prise')->nullable();
            $table->string('expention')->nullable();
            $table->string('eau_gach')->nullable();
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
        Schema::dropIfExists('phase_temps_prises');
    }
};
