<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model {
    use HasFactory;

    protected $fillable = ['nombre_coche', 'detalles_coche_id'];

    public function detalles() {
        return $this->belongsTo(DetallesCoche::class, 'detalles_coche_id');
    }

    public function usuarios() {
        return $this->belongsToMany(Usuario::class, 'usuario_coche');
    }

    public $timestamps = false;
}

