<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioCircuitoCoche extends Model {
    use HasFactory;

    protected $table = 'usuario_circuito_coche';
    public $timestamps = false;

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function circuito() {
        return $this->belongsTo(Circuito::class, 'circuito_id');
    }

    public function coche() {
        return $this->belongsTo(Coche::class, 'coche_id');
    }
}
