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
        Schema::create('ofertas_insumos', function (Blueprint $table) {
            $table->id();
            $table->date('fechainicial')->nullable();
            $table->date('fechafinal')->nullable();
            $table->text('descripcionoferta')->nullable();
            $table->unsignedBigInteger('insumos_id');
            $table->unsignedBigInteger('proveedors_id');

            
            $table->foreign('insumos_id')->references('id')->on('insumos');
            $table->foreign('proveedors_id')->references('id')->on('proveedors');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas_insumos');
    }
};
