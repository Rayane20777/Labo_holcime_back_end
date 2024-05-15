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
        Schema::create('proportions', function (Blueprint $table) {
            $table->id();
            $table->float('kk_g')->nullable();
            $table->float('cal_g')->nullable();
            $table->float('cv_g')->nullable();
            $table->float('lait_g')->nullable();
            $table->float('gypse')->nullable();
            $table->float('kk_ng')->nullable();
            $table->float('cal_ng')->nullable();
            $table->float('cv_ng')->nullable();
            $table->float('lait_ng')->nullable();
            $table->float('∑_gypse')->nullable();
            $table->foreignId('analyse_id')->constrained('analyses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proportions');
    }
};
