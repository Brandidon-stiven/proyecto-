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
        Schema::create('productos_por_insumo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productos_id');
            $table->unsignedBigInteger('insumos_id');

            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('insumos_id')->references('id')->on('insumos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_por_insumo');
    }
};
