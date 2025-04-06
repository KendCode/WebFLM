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
        Schema::create('beneficiario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('ci'); // Usar un número entero grande para el CI
            $table->char('genero', 1); // 'M' o 'F'
            $table->unsignedInteger('nroCelular'); // Usar un número entero para el número de celular
            $table->date('fechaNacimiento');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiario');
    }
};
