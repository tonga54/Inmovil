<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InmuebleAmbiente extends Model
{
    protected $table = "inmuebles_ambientes";


    protected $fillable = ['idInmueble', 'idAmbientes'];
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
