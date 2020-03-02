<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atributos extends Model
{
    protected $table = "atributos";


    // protected $fillable = ['id','nombre','tipo'];

    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble');
    }

    public function mlCategorias3()
    {
        return $this->belongsToMany('App\MlCategorias3');
    }

    public function mlCategorias4()
    {
        return $this->belongsToMany('App\MlCategorias4');
    }
}
