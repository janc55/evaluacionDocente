<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asocia estudiantes a usuarios existentes
        Estudiante::create([
            'est_nombres' => 'Estudiante 1',
            'est_paterno' => 'Apellido1',
            'est_materno' => 'Apellido2',
            'est_ci' => sprintf("%08d", rand(1, 99999999)),
            'est_codigo' => sprintf("%04d", rand(1, 9999)),
            'est_celular' => sprintf("%08d", rand(1, 99999999)),
            'est_email' => 'estudiante1@example.com',
            // Otros campos según sea necesario
            'user_id' => User::where('email', 'estudiante1@example.com')->first()->id,
        ]);

        Estudiante::create([
            'est_nombres' => 'Estudiante 2',
            'est_paterno' => 'Apellido2',
            'est_materno' => 'Apellido2',
            'est_ci' => sprintf("%08d", rand(1, 99999999)),
            'est_codigo' => sprintf("%04d", rand(1, 9999)),
            'est_celular' => sprintf("%08d", rand(1, 99999999)),
            'est_email' => 'estudiante2@example.com',
            'user_id' => User::where('email', 'estudiante2@example.com')->first()->id,
        ]);

        Estudiante::create([
            'est_nombres' => 'Estudiante 3',
            'est_paterno' => 'Apellido3',
            'est_materno' => 'Apellido2',
            'est_ci' => sprintf("%08d", rand(1, 99999999)),
            'est_codigo' => sprintf("%04d", rand(1, 9999)),
            'est_celular' => sprintf("%08d", rand(1, 99999999)),
            'est_email' => 'estudiante3@example.com',
            'user_id' => User::where('email', 'estudiante3@example.com')->first()->id,
        ]);

        Estudiante::create([
            'est_nombres' => 'Estudiante 4',
            'est_paterno' => 'Apellido4',
            'est_materno' => 'Apellido2',
            'est_ci' => sprintf("%08d", rand(1, 99999999)),
            'est_codigo' => sprintf("%04d", rand(1, 9999)),
            'est_celular' => sprintf("%08d", rand(1, 99999999)),
            'est_email' => 'estudiante4@example.com',
            'user_id' => User::where('email', 'estudiante4@example.com')->first()->id,
        ]);

        Estudiante::create([
            'est_nombres' => 'Estudiante 5',
            'est_paterno' => 'Apellido5',
            'est_materno' => 'Apellido2',
            'est_ci' => sprintf("%08d", rand(1, 99999999)),
            'est_codigo' => sprintf("%04d", rand(1, 9999)),
            'est_celular' => sprintf("%08d", rand(1, 99999999)),
            'est_email' => 'estudiante5@example.com',
            'user_id' => User::where('email', 'estudiante5@example.com')->first()->id,
        ]);
    }
}
