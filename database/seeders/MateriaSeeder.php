<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Derecho
        Materia::create([
            'mat_nombre' => 'Introducción al Derecho',
            'mat_sigla' => 'ID',
            'carrera_id' => 1, // Reemplaza con el ID real de la carrera Derecho
            'semestre' => 1,
            // Otros campos según sea necesario
        ]);

        Materia::create([
            'mat_nombre' => 'Derecho Civil',
            'mat_sigla' => 'DC',
            'carrera_id' => 1, // Reemplaza con el ID real de la carrera Derecho
            'semestre' => 2,
            // Otros campos según sea necesario
        ]);

        // Administración de Empresas
        Materia::create([
            'mat_nombre' => 'Contabilidad Básica',
            'mat_sigla' => 'CB',
            'carrera_id' => 2, // Reemplaza con el ID real de la carrera Administración de Empresas
            'semestre' => 1,
            // Otros campos según sea necesario
        ]);

        Materia::create([
            'mat_nombre' => 'Gestión Empresarial',
            'mat_sigla' => 'GE',
            'carrera_id' => 2, // Reemplaza con el ID real de la carrera Administración de Empresas
            'semestre' => 2,
            // Otros campos según sea necesario
        ]);

        // ... Repite el proceso para las demás carreras
    }
}
