<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioCircuitoSeeder extends Seeder {
    public function run() {
        DB::table('usuario_circuito')->insert([
            ['usuario_id' => 1, 'circuito_id' => 1],
            ['usuario_id' => 2, 'circuito_id' => 2],
        ]);
    }
}

