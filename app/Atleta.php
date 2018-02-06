<?php

namespace soyDeporte;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
    	'asociacion_id',
    	'equipo_id',
    	'localidad_id',
    	'apellido',
    	'nombre',
    	'dni',
    	'genero',
    	'telefono',
    	'direccion',
    	'image',
    	];
}
