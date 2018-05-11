<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InmuebleComodidad extends Model
{
    protected $table = "inmuebles_comodidades";


    protected $fillable = ['idInmueble', 'idComodidades'];

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
