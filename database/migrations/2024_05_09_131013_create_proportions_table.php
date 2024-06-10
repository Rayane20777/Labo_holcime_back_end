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
            $table->string('KK_G')->nullable();
            $table->string('CAL_G')->nullable();
            $table->string('CV_G')->nullable();
            $table->string('LAIT_G')->nullable();
            $table->string('GYPSE')->nullable();
            $table->string('KK_NG')->nullable();
            $table->string('CAL_NG')->nullable();
            $table->string('CV_NG')->nullable();
            $table->string('LAIT_NG')->nullable();
            $table->string('∑_Gypse')->nullable();
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
