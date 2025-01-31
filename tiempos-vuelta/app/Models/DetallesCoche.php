<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesCoche extends Model {
    use HasFactory;

    protected $table = 'detalles_coche';
    protected $fillable = ['peso', 'caballos', 'tipo_traccion'];
    public $timestamps = false;

    // Un DetallesCoche pertenece a un solo Coche
    public function coche() {
        return $this->hasOne(Coche::class, 'detalles_coche_id');
    }

}
