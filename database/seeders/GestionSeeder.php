<?php

namespace Database\Seeders;

use App\Models\Gestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Gestion::create([
            'nombre' => '1/2023',
            // Otros campos según sea necesario
        ]);
    }
}
