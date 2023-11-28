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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            // Relación con la tabla designacion_materias
            $table->foreignId('designacion_materia_id')->constrained();
            $table->integer('pregunta1');
            $table->integer('pregunta2');
            $table->integer('pregunta3');
            $table->integer('pregunta4');
            $table->integer('pregunta5');
            $table->integer('pregunta6');
            $table->integer('pregunta7');
            $table->integer('pregunta8');
            $table->integer('pregunta9');
            $table->integer('pregunta10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacions');
    }
};
