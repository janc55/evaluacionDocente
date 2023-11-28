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
        Schema::create('asignacion_docentes', function (Blueprint $table) {
            $table->id();

            // Relación con la tabla gestiones
            $table->foreignId('gestion_id')->constrained();

            // Relación con la tabla materias
            $table->foreignId('materia_id')->constrained();

            // Relación con la tabla docentes
            $table->foreignId('docente_id')->constrained('docentes');

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
        Schema::dropIfExists('asignacion_docentes');
    }
};
