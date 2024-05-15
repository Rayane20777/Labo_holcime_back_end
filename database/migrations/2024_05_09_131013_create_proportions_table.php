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
            $table->float('KK_G')->nullable();
            $table->float('CAL_G')->nullable();
            $table->float('CV_G')->nullable();
            $table->float('LAIT_G')->nullable();
            $table->float('GYPSE')->nullable();
            $table->float('KK_NG')->nullable();
            $table->float('CAL_NG')->nullable();
            $table->float('CV_NG')->nullable();
            $table->float('LAIT_NG')->nullable();
            $table->float('∑_Gypse')->nullable();
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
        Schema::dropIfExists('proportions');
    }
};
