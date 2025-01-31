<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesCircuito extends Model {
    use HasFactory;

    protected $table = 'detalles_circuito';
    protected $fillable = ['longitud', 'ubicacion'];
    public $timestamps = false;

    // Un DetallesCircuito pertenece a un solo Circuito
    public function circuito() {
        return $this->hasOne(Circuito::class, 'detalles_circuito_id');
    }

}

