<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $table = 'beneficiario';
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'genero',
        'nroCelular',
        'fechaNacimiento',
        'direccion',
    ];
}
