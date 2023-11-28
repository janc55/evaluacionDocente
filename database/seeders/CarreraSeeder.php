<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carrera::create([
            'carrera_nombre' => 'Derecho',
            'carrera_sigla' => 'DER',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Administración de Empresas',
            'carrera_sigla' => 'ADM',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Auditoria',
            'carrera_sigla' => 'AUD',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Ingeniería de Sistemas',
            'carrera_sigla' => 'SIS',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Odontología',
            'carrera_sigla' => 'ODO',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Medicina',
            'carrera_sigla' => 'MED',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Enfermería',
            'carrera_sigla' => 'ENF',
            // Otros campos según sea necesario
        ]);

        Carrera::create([
            'carrera_nombre' => 'Gastronomía, Turismo y Hotelería',
            'carrera_sigla' => 'GTH',
            // Otros campos según sea necesario
        ]);
    }
}
