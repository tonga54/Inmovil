<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constructora extends Model
{
    protected $table = "constructoras";


    protected $fillable = ['nombre', 'documento', 'telefono', 'idLocalidad', 'email'];

    public function localidad()
    {
        return $this->belongsTo('App\Localidad','idLocalidad');
    }

    public function imuebles()
    {
        return $this->hasMany('App\Inmueble');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
