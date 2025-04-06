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
        Schema::create('grupo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');                      // El nombre del grupo.
            $table->text('descripcion');                   // Usamos text para una descripción más larga.
            $table->date('fecha');                         // La fecha del evento o actividad.
            $table->time('hora');                          // Usamos 'time' para almacenar una hora.
            $table->enum('estado', ['Activo', 'Suspendido','Finalizado']); // Usamos 'enum' para limitar los valores posibles.
            $table->unsignedInteger('nroParticipantes');   // Usamos unsignedInteger para almacenar un número de participantes.
            $table->string('tematica');                    // Tema del grupo.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo');
    }
};
