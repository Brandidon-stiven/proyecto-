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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->char('docUsuario',45)->nullable();;
            $table->string('nomUsuario',45)->nullable();;
            $table->string('apellidousuario',45)->nullable();;
            $table->string('telefono',10)->nullable();;
            $table->char('email',50)->nullable();;
            $table->char('direccion',50)->nullable();;
            $table->char('contrasena',50)->nullable();;
            $table->unsignedBigInteger('rols_id');
            

            $table->foreign('rols_id')->references('id')->on('rols');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
