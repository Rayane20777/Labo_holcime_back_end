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
            $table->string('1j')->nullable();
            $table->string('2j')->nullable();
            $table->string('7j')->nullable();
            $table->string('28j')->nullable();
            $table->string('90j')->nullable();
            $table->string('w1')->nullable();
            $table->string('w2')->nullable();
            $table->string('w3')->nullable();
            $table->string('w4')->nullable();
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
