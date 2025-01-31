<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioCocheSeeder extends Seeder {
    public function run() {
        DB::table('usuario_coche')->insert([
            ['usuario_id' => 1, 'coche_id' => 1],
            ['usuario_id' => 2, 'coche_id' => 2],
        ]);
    }
}
