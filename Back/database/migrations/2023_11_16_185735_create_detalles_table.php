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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->double('cantidad')->nullable();
            $table->decimal('valor_unitario')->nullable();
            $table->char('impuesto',20)->nullable();
            $table->decimal('valor_total_detalle')->nullable();
            $table->unsignedBigInteger('productos_id');
            $table->unsignedBigInteger('ventas_id');

            $table->foreign('productos_id')->references('id')->on('productos');
            $table->foreign('ventas_id')->references('id')->on('ventas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
