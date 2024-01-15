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
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->id();
            $table->char('docTecnico',45)->nullable();
            $table->string('nomTecnico',45)->nullable();
            $table->string('apellidoTecnico',45)->nullable();
            $table->char('telTecnico',10)->nullable();
            $table->char('correoTecnico',50)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnicos');
    }
};
