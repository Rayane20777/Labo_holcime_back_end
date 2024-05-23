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
            $table->float('2-32µm')->nullable();
            $table->float('>45µm')->nullable();
            $table->float('>80µm')->nullable();
            $table->integer('SSB')->nullable();
            $table->float('insoluble')->nullable();
            $table->float('CO2')->nullable();
            $table->float('PF')->nullable();
            $table->float('Cl')->nullable();
            $table->float('H41')->nullable();
            $table->float('S2-')->nullable();
            $table->float('CaOl')->nullable();
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
