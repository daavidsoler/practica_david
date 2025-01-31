<?php

namespace Database\Seeders;

use App\Models\Coche;
use Illuminate\Database\Seeder;

class CocheSeeder extends Seeder {
    public function run() {
        Coche::create([
            'nombre_coche' => 'Ferrari F8',
            'detalles_coche_id' => 1 // Relación con DetallesCocheSeeder
        ]);

        Coche::create([
            'nombre_coche' => 'Lamborghini Huracán',
            'detalles_coche_id' => 2
        ]);
    }
}

