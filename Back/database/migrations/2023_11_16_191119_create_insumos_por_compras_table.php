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
        Schema::create('insumos_por_compras', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad')->nullable();
            $table->decimal('valor_unitario')->nullable();
            $table->char('impuesto',45)->nullable();
            $table->char('valor_detalle_compra',45)->nullable();
            $table->unsignedBigInteger('compras_id')->onDelete('cascade');
            $table->unsignedBigInteger('insumos_id')->onDelete('cascade');
         

            $table->foreign('compras_id')->references('id')->on('compras');
            $table->foreign('insumos_id')->references('id')->on('insumos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insumos_por_compras');
    }
};
