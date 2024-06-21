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
            $table->string('GOF')->nullable();
            $table->string('R_wp')->nullable();
            $table->string('R_exp')->nullable();
            $table->string('Displacement')->nullable();
            $table->string('Alite_M3')->nullable();
            $table->string('Alite_M1')->nullable();
            $table->string('Alite_Sum')->nullable();
            $table->string('Fraction_M1')->nullable();
            $table->string('Alite_CS')->nullable();
            $table->string('Alite_PO')->nullable();
            $table->string('Belite_beta')->nullable();
            $table->string('Belite_alpha')->nullable();
            $table->string('Belite_alpha_H')->nullable();
            $table->string('Belite_gamma')->nullable();
            $table->string('Belite_Sum')->nullable();
            $table->string('Alum_cubic')->nullable();
            $table->string('Alum_ortho')->nullable();
            $table->string('Alum_mono')->nullable();
            $table->string('Alum_Sum')->nullable();
            $table->string('Ferrite')->nullable();
            $table->string('Lime')->nullable();
            $table->string('Portlandite')->nullable();
            $table->string('fCaO_XRD')->nullable();
            $table->string('Periclase')->nullable();
            $table->string('Quartz')->nullable();
            $table->string('Arcanite')->nullable();
            $table->string('Thenardite')->nullable();
            $table->string('Langbeinite')->nullable();
            $table->string('Aphthitalite')->nullable();
            $table->string('Gypsum')->nullable();
            $table->string('Hemi_Hydrate')->nullable();
            $table->string('Anhydrite')->nullable();
            $table->string('Calcite')->nullable();
            $table->string('Dolomite')->nullable();
            $table->string('Mullite')->nullable();
            $table->string('Magnetite')->nullable();
            $table->string('Hematite')->nullable();
            $table->string('Flyash_amorph')->nullable();
            $table->string('FA_Sum')->nullable();
            $table->string('Syngenite')->nullable();
            $table->string('Albite')->nullable();
            $table->string('Anorthite')->nullable();
            $table->string('Andesine')->nullable();
            $table->string('K_Feldspar')->nullable();
            $table->string('Illite')->nullable();
            $table->string('Feldspar_Sum')->nullable();
            $table->string('SO3_XRD')->nullable();
            $table->string('CO2_XRD')->nullable();
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
        Schema::dropIfExists('xrds');
    }
};
