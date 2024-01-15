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
        Schema::create('tecnico_por_mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tecnicos_id');
            $table->unsignedBigInteger('mantenimientos_id');

            $table->foreign('tecnicos_id')->references('id')->on('tecnicos')->onDelete('cascade');
            $table->foreign('mantenimientos_id')->references('id')->on('mantenimientos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnico_por_mantenimiento');
    }
};
