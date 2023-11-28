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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('mat_sigla');
            $table->string('mat_nombre');
            $table->foreignId('carrera_id')->constrained(); // Relación con la carrera
            $table->unsignedInteger('semestre');
            // Otros campos según sea necesario

            // Agregar relación de prerequisito a la misma tabla
            $table->foreignId('prerequisito_id')->nullable()->constrained('materias', 'id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
