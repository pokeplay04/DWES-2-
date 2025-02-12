<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'contacto',
        'telefono',
        'email',
        'direccion',
        'poblacion',
        'codigo_postal',
        'provincia',
        'estado',
        'fecha_creacion',
        'fecha_realizacion',
        'operario',
        'descripcion',
        'anotaciones_anteriores',
        'anotaciones_posteriores',
        'fichero_resumen',
    ];
}

?>