<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = "caracteristicas";


    protected $fillable = ['id','nombre','tipo'];

    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble');
    }

    public function tiposOperaciones()
    {
        return $this->belongsToMany('App\TipoOperacion');
    }
}
