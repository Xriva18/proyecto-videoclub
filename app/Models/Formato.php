<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    use HasFactory;
    protected $table = 'formato';
    protected $primaryKey = 'id_formato';
    public $timestamps = true;

    protected $fillable = ['nombre_formato'];
}
