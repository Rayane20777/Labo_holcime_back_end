<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lpee', function (Blueprint $table) {
            $table->id();
            $table->string('P_AF')->nullable();
            $table->string('SO3')->nullable();
            $table->string('SiO2')->nullable();
            $table->string('Fe2O3')->nullable();
            $table->string('Al2O3')->nullable();
            $table->string('CaO')->nullable();
            $table->string('MgO')->nullable();
            $table->string('Cl')->nullable();
            $table->string('Na2O')->nullable();
            $table->string('K2O')->nullable();
            $table->string('insoluble')->nullable();
            $table->string('regulateur_de_prise')->nullable();
            $table->string('ajout_calcaire')->nullable();
            $table->string('teneur_en_pouzzolane')->nullable();
            $table->string('clinker')->nullable();
            $table->string('laitier')->nullable();
            $table->string('sulfures')->nullable();
            $table->string('perte_au_feu_500')->nullable();
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
        Schema::dropIfExists('lpee');
    }
};
