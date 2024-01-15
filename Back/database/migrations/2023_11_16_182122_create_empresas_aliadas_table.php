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
        Schema::create('empresas_aliadas', function (Blueprint $table) {
            $table->id();
            $table->char('NIT',45)->nullable();
            $table->char('razon_social',45)->nullable();
            $table->char('telEmpresa',45)->nullable();
            $table->char('correoEmpresa',45)->nullable();
            $table->char('direccionEmpresa',45)->nullable();
            $table->char('contrasenaEmp',45)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas_aliadas');
    }
};
