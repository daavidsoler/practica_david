<?php

namespace Database\Seeders;

use App\Models\Circuito;
use Illuminate\Database\Seeder;

class CircuitoSeeder extends Seeder {
    public function run() {
        Circuito::create([
            'nombre_circuito' => 'Autodromo Nazionale Monza',
            'detalles_circuito_id' => 1
        ]);

        Circuito::create([
            'nombre_circuito' => 'Circuit de Spa-Francorchamps',
            'detalles_circuito_id' => 2
        ]);

        Circuito::create([
            'nombre_circuito' => 'Circuit de Ricardo Tormo',
            'detalles_circuito_id' => 3
        ]);
    }
}

