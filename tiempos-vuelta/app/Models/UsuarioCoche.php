<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioCoche extends Model {
    use HasFactory;

    protected $table = 'usuario_coche';
    public $timestamps = false;
}

