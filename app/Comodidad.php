<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comodidad extends Model
{
    protected $table = "comodidades";


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
