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
        Schema::create('xrds', function (Blueprint $table) {
            $table->id();
            $table->float('Displacement')->nullable();
            $table->float('Alite_CS')->nullable();
            $table->float('R_wp')->nullable();
            $table->float('FA_Sum')->nullable();
            $table->float('Clinker')->nullable();
            $table->float('fCaO_XRD')->nullable();
            $table->float('Alite_Sum')->nullable();
            $table->float('Belite_Sum')->nullable();
            $table->float('Alum_Sum')->nullable();
            $table->float('Ferrite')->nullable();
            $table->float('Gypse')->nullable();
            $table->float('CALCAIRE')->nullable();
            $table->float('SO3')->nullable();
            $table->float('Mullite')->nullable();
            $table->float('Quartz')->nullable();
            $table->float('Magnetite')->nullable();
            $table->float('Hematite')->nullable();
            $table->float('Flyash_amorph')->nullable();
            $table->float('Alite_M1')->nullable();
            $table->float('Alite_M3')->nullable();
            $table->float('Fraction_M1')->nullable();
            $table->float('R_exp')->nullable();
            $table->float('Alite_PO')->nullable();
            $table->float('Belite_alpha')->nullable();
            $table->float('Belite_alpha_H')->nullable();
            $table->float('Belite_beta')->nullable();
            $table->float('Belite_gamma')->nullable();
            $table->float('Alum_cubic')->nullable();
            $table->float('Alum_ortho')->nullable();
            $table->float('Lime')->nullable();
            $table->float('Portlandite')->nullable();
            $table->float('Periclase')->nullable();
            $table->float('Arcanite')->nullable();
            $table->float('Aphthitalite')->nullable();
            $table->float('Langbeinite')->nullable();
            $table->float('Gypsum')->nullable();
            $table->float('Hemi_Hydrate')->nullable();
            $table->float('Anhydrite')->nullable();
            $table->float('SO3_XRD')->nullable();
            $table->float('CO2_XRD')->nullable();
            $table->float('Syngenite')->nullable();
            $table->float('Calcite')->nullable();
            $table->float('Dolomite')->nullable();
            $table->foreignId('analyse_id')->constrained('analyses')->onDelete('cascade')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xrds');
    }
};
