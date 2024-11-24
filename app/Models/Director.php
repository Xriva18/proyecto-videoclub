<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $table = 'director';
    protected $primaryKey = 'id_director';
    public $timestamps = true;

    protected $fillable = ['nombre_director'];
}
