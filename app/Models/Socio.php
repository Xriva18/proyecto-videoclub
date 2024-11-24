<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    protected $table = 'socio';
    protected $primaryKey = 'id_socio';
    public $timestamps = true;

    protected $fillable = [
        'nombre_socio',
        'apellido_socio',
        'direccion_socio',
        'telefono_socio',
        'correo_socio',
    ];
}

