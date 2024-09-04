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
        Schema::create('analyse_chimiques', function (Blueprint $table) {
            $table->id();
            $table->string('finesse_2_32')->nullable();
            $table->string('finesse_45')->nullable();
            $table->string('finesse_80')->nullable();
            $table->string('SSB')->nullable();
            $table->string('insoluble')->nullable();
            $table->string('CO2')->nullable();
            $table->string('PF')->nullable();
            $table->string('Cl')->nullable();
            $table->string('H41')->nullable();
            $table->string('S2')->nullable();
            $table->string('CaOl')->nullable();
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
        Schema::dropIfExists('analyse_chimiques');
    }
};
