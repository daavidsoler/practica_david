<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    use HasFactory;

    protected $fillable = ['username', 'email', 'password'];

    public function coches() {
        return $this->belongsToMany(Coche::class, 'usuario_coche');
    }

    public function circuitos() {
        return $this->hasManyThrough(Circuito::class, UsuarioCircuito::class, 'usuario_id', 'id', 'id', 'circuito_id');
    }

    public $timestamps = false;
}


