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
        Schema::create('gestions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ejemplo: "Gestión 1/2023"
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            // Otros campos según sea necesario

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestions');
    }
};
