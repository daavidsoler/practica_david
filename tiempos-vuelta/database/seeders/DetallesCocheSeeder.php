<?php

namespace Database\Seeders;

use App\Models\DetallesCoche;
use Illuminate\Database\Seeder;

class DetallesCocheSeeder extends Seeder {
    public function run() {
        DetallesCoche::create([
            'peso' => 1200,
            'caballos' => 300,
            'tipo_traccion' => 'RWD'
        ]);

        DetallesCoche::create([
            'peso' => 1500,
            'caballos' => 400,
            'tipo_traccion' => 'AWD'
        ]);
    }
}

