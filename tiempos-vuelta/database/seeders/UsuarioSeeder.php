<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder {
    public function run() {
        Usuario::create([
            'username' => 'player1',
            'email' => 'player1@gmail.com',
            'password' => ('player1')
        ]);

        Usuario::create([
            'username' => 'player2',
            'email' => 'player2@gmail.com', 
            'password' => ('player2')
        ]);
    }
}

