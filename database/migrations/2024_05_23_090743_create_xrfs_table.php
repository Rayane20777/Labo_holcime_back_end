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
        Schema::create('xrfs', function (Blueprint $table) {
            $table->id();
            $table->string('SiO2')->nullable();
            $table->string('Al2O3')->nullable();
            $table->string('Fe2O3')->nullable();
            $table->string('CaO')->nullable();
            $table->string('MgO')->nullable();
            $table->string('SO3')->nullable();
            $table->string('K2O')->nullable();
            $table->string('Na2O')->nullable();
            $table->string('P2O5')->nullable();
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
        Schema::dropIfExists('xrfs');
    }
};
