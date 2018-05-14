<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InmuebleCaracteristica extends Model
{
    protected $table = "inmuebles_caracteristicas";


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
