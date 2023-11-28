<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea usuarios de ejemplo
        User::create([
            'name' => 'JANC55',
            'email' => 'josenegretti55@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        // Crea usuarios de ejemplo
        User::create([
            'name' => 'Estudiante 1',
            'email' => 'estudiante1@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Estudiante 2',
            'email' => 'estudiante2@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Estudiante 3',
            'email' => 'estudiante3@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Estudiante 4',
            'email' => 'estudiante4@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Estudiante 5',
            'email' => 'estudiante5@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Docente 1',
            'email' => 'docente1@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Docente 2',
            'email' => 'docente2@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Docente 3',
            'email' => 'docente3@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
