<?php

namespace Database\Seeders;

use App\Models\Docente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docente::create([
            'doc_nombres' => 'Nombre1',
            'doc_apellido_paterno' => 'ApellidoPaterno1',
            'doc_apellido_materno' => 'ApellidoMaterno1',
            'doc_cedula_identidad' => '1234567',
            'doc_codigo' => 'DOC001',
            'doc_celular' => '123456789',
            'doc_email' => 'docente1@example.com',
            'user_id' => User::where('email', 'docente1@example.com')->first()->id,
        ]);

        Docente::create([
            'doc_nombres' => 'Nombre2',
            'doc_apellido_paterno' => 'ApellidoPaterno2',
            'doc_apellido_materno' => 'ApellidoMaterno2',
            'doc_cedula_identidad' => '2345678',
            'doc_codigo' => 'DOC002',
            'doc_celular' => '987654321',
            'doc_email' => 'docente2@example.com',
            'user_id' => User::where('email', 'docente2@example.com')->first()->id,
        ]);

        Docente::create([
            'doc_nombres' => 'Nombre3',
            'doc_apellido_paterno' => 'ApellidoPaterno3',
            'doc_apellido_materno' => 'ApellidoMaterno3',
            'doc_cedula_identidad' => '3456789',
            'doc_codigo' => 'DOC003',
            'doc_celular' => '555555555',
            'doc_email' => 'docente3@example.com',
            'user_id' => User::where('email', 'docente3@example.com')->first()->id,
        ]);
    }
}
