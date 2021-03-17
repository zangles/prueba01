<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_legajo',
        'apellido',
        'nombre',
        'direccion',
        'localidad',
        'id_tipo_documento',
        'nro_documento',
        'codigo_postal',
        'id_provincia'
    ];

    public function provincia()
    {
        return $this->hasOne(Provincia::class,'id_provincia', 'id_provincia');
    }

    public function tipoDocumento()
    {
        return $this->hasOne(TipoDocumento::class,'id_tipo_documento', 'id_tipo_documento');
    }
}
