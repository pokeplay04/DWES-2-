<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'tareas';

    protected $fillable = [
        'cliente_id',
        'operario_id',
        'persona_contacto',
        'telefono_contacto',
        'correo_contacto',
        'direccion',
        'poblacion',
        'codigo_postal',
        'provincia',
        'descripcion',
        'estado',
        'fecha_creacion',
        'fecha_realizacion',
        'anotaciones_anteriores',
        'anotaciones_posteriores',
        'fichero_resumen',
    ];

}

?>