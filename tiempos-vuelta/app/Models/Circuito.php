<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model {
    use HasFactory;

    protected $table = 'circuitos';
    protected $fillable = ['nombre_circuito', 'detalles_circuito_id'];
    public $timestamps = false;

    public function detalles() {
        return $this->belongsTo(DetallesCircuito::class, 'detalles_circuito_id');
    }

    public function usuarios() {
        return $this->belongsToMany(Usuario::class, 'usuario_circuito', 'circuito_id', 'usuario_id');
    }

}

