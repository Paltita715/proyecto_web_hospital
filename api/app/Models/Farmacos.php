<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'compuesto', 'unidades_por_paquete', 'descripcion'
        , 'reg_sanitario', 'stock'
    ];
}
