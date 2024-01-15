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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->char('docProveedor',45)->nullable();
            $table->string('nomProveedor',45)->nullable();
            $table->string('apellidoProveedor',45)->nullable();
            $table->char('telProveedor',10)->nullable();
            $table->char('correoProveedor',50)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
