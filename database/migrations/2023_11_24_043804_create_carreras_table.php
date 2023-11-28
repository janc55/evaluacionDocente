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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('carrera_sigla');
            $table->string('carrera_nombre');
            $table->text('descripcion')->nullable();
            $table->string('facultad')->nullable();
            $table->string('nivel_estudios')->nullable();
            $table->string('plan_estudios')->nullable();
            $table->integer('duracion')->nullable();
            $table->foreignId('coordinador_id')->nullable()->constrained('users');
            $table->date('fecha_creacion')->nullable();
            // Otros campos según sea necesario

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
