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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Relación con la tabla users
            $table->string('est_nombres');
            $table->string('est_paterno');
            $table->string('est_materno');
            $table->string('est_ci')->unique();
            $table->string('est_codigo')->unique();
            $table->string('est_celular');
            $table->string('est_email')->unique();
            // Otros campos según sea necesario

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
