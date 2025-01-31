<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            UsuarioSeeder::class,
            DetallesCocheSeeder::class,
            CocheSeeder::class,
            DetallesCircuitoSeeder::class,
            CircuitoSeeder::class,
            UsuarioCocheSeeder::class,
            UsuarioCircuitoSeeder::class,
            UsuarioCircuitoCocheSeeder::class
        ]);

    }
}
