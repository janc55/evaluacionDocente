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
        Schema::create('asignacion_estudiantes', function (Blueprint $table) {
            $table->id();
            
            // Relación con la tabla gestiones
            $table->foreignId('gestion_id')->constrained();

            // Relación con la tabla designacion_materias
            $table->foreignId('designacion_materia_id')->constrained();

            // Relación con la tabla estudiantes
            $table->foreignId('estudiante_id')->constrained();

            $table->date('fecha_asignacion');
            // Otros campos según sea necesario

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_estudiantes');
    }
};
