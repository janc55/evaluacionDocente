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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Relación con la tabla users
            $table->string('doc_nombres');
            $table->string('doc_apellido_paterno');
            $table->string('doc_apellido_materno');
            $table->string('doc_cedula_identidad')->unique();
            $table->string('doc_codigo')->unique();
            $table->string('doc_celular');
            $table->string('doc_email')->unique();
            // Otros campos según sea necesario

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
