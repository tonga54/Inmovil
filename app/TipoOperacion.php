<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOperacion extends Model
{
    protected $table = "localidades";


    protected $fillable = ['nombre'];

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

    public function ambientes()
    {
        return $this->belongsToMany('App\Ambiente');
    }

    public function comodidades()
    {
        return $this->belongsToMany('App\Comodidad');
    }

    public function caracteristicasAdicionales()
    {
        return $this->belongsToMany('App\CaracteristicaAdicional');
    }

}
