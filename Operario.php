<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'empleados';

    protected $fillable = [
        'dni',
        'nombre',
        'correo',
        'telefono',
        'direccion',
        'fecha_alta',
        'tipo'
    ];

}

?>