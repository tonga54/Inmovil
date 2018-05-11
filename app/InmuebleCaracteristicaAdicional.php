<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InmuebleCaracteristicaAdicional extends Model
{
    protected $table = "inmuebles_cadic";


    protected $fillable = ['idInmueble', 'idCaracteristica'];

    /*
    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble');
    }

    public function tiposOperaciones()
    {
        return $this->belongsToMany('App\TipoOperacion');
    }
    */
}
