<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'nro_documento',
        'tipo_documento_id',
        'fecha_nacimiento',
        'direccion_id'
    ];

    //Relacion uno a muchos con Direccion
    public function direccion()
    {
        return $this->belongsTo(Direcciones::class);
    }

    //Relacion uno a muchos con TipoDocumento
    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
