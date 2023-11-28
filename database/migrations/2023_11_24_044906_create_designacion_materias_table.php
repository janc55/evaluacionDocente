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
        Schema::create('designacion_materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materia_id')->constrained('materias');
            $table->foreignId('gestion_id')->constrained('gestions');
            $table->foreignId('docente_id')->constrained('docentes');
            $table->enum('turno', ['Mañana', 'Tarde', 'Noche']);
            $table->string('paralelo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designacion_materias');
    }
};
