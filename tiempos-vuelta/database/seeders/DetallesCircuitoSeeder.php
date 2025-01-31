<?php

namespace Database\Seeders;

use App\Models\DetallesCircuito;
use Illuminate\Database\Seeder;

class DetallesCircuitoSeeder extends Seeder {
    public function run() {
        DetallesCircuito::create([
            'longitud' => 5.3,
            'ubicacion' => 'Monza, Italia'
        ]);

        DetallesCircuito::create([
            'longitud' => 7.0,
            'ubicacion' => 'Spa-Francorchamps, Bélgica'
        ]);

        DetallesCircuito::create([
            'longitud' => 4.0,
            'ubicacion' => 'València, España'
        ]);
    }
}

