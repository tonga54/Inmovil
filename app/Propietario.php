<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table = "propietarios";


    protected $fillable = ['nombre', 'apellido', 'documento', 'telefono', 'direccion', 'email', 'idLocalidad', 'idBarrio'];

    public function localidad()
    {
        return $this->belongsTo('App\Localidad','idLocalidad');
    }

    public function barrio()
    {
        return $this->belongsTo('App\Barrio','idBarrio');
    }

    public function imueble()
    {
        return $this->hasMany('App\Inmueble');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

}
