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
        Schema::create('evaluacion_estudiante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudiante_id')->constrained();
            $table->foreignId('designacion_materia_id')->constrained();
            $table->boolean('evaluacion_realizada')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_estudiante');
    }
};
