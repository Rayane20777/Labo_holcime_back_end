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
            $table->float('SiO2')->nullable();
            $table->float('Al2O3')->nullable();
            $table->float('Fe2O3')->nullable();
            $table->float('CaO')->nullable();
            $table->float('MgO')->nullable();
            $table->float('SO3')->nullable();
            $table->float('K2O')->nullable();
            $table->float('Na2O')->nullable();
            $table->float('P2O5')->nullable();
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
