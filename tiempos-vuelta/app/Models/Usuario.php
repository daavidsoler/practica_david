<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    use HasFactory;
    protected $fillable = ['username'];

    public function coches() {
        return $this->belongsToMany(Coche::class, 'usuario_coche');
    }

    public function circuitos() {
        return $this->belongsToMany(Circuito::class, 'usuario_circuito');
    }

    public function tiemposDeVuelta() {
        return $this->hasMany(UsuarioCircuitoCoche::class);
    }
}

