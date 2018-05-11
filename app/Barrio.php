<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{

    public function localidad(){
        return $this->belongsTo('App\Localidad','idLocalidad');
    }

    public function interesados()
    {
        return $this->hasMany('App\Interesado');
    }

    public function clientes()
    {
        return $this->hasMany('App\Cliente');
    }

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }

}
