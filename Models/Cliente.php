<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'cif',
        'nombre',
        'telefono',
        'correo',
        'cuenta_corriente',
        'pais',
        'moneda',
        'importe_cuota_mensual'
    ];

}

?>