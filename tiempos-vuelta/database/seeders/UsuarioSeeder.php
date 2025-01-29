<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder {
    public function run() {
        Usuario::create(['name' => 'player1']);
    }
}

