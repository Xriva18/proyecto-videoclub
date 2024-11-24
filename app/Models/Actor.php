<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $table = 'actor';
    protected $primaryKey = 'id_actor';
    protected $foreignKey = 'id_sex';
    public $timestamps = true;

    protected $fillable = ['nombre_actor'];
}
