<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'apellido',
        'nombre',
        'direccion',
        'fecha_nacimiento',
        'edad',
        'sueldo',
        'estado',
        'sexo',
    ];
}
