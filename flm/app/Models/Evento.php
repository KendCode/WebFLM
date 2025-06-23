<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Evento extends Model
{
    protected $table = 'evento';
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'ubicacion',
    ];
}
