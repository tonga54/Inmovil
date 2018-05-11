<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaAdicional extends Model
{
    protected $table = "caracteristicasadicionales";


    protected $fillable = ['nombre'];

    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble');
    }

    public function tiposOperaciones()
    {
        return $this->belongsToMany('App\TipoOperacion');
    }
}
