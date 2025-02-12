<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operario extends Model
{
    use HasFactory;

    protected $table = 'operarios';

    protected $fillable = [
        'dni',
        'nombre',
        'correo',
        'telefono',
        'direccion',
        'fecha_alta',
        'tipo'
    ];

    protected $dates = [
        'fecha_alta'
    ];
}

?>