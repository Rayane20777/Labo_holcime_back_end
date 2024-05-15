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
        Schema::create('resultat_analyse_physiques', function (Blueprint $table) {
            $table->id();
            $table->float('1j')->nullable();
            $table->float('2j')->nullable();
            $table->float('7j')->nullable();
            $table->float('28j')->nullable();
            $table->float('90j')->nullable();
            $table->float('w1')->nullable();
            $table->float('w2')->nullable();
            $table->float('w3')->nullable();
            $table->float('w4')->nullable();
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
        Schema::dropIfExists('resultat_analyse_physiques');
    }
};
