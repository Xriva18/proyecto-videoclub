<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $table = 'genero';
    protected $primaryKey = 'id_genero';
    public $timestamps = true;
    
    protected $fillable = ['nombre_genero'];
}
