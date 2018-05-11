<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    protected $table = "operaciones";


    protected $fillable = ['idInmueble', 'idInteresado', 'descripcion', 'fecha'];

    public function inmueble(){
    	return $this->hasOne('App\Inmuebles');	
    }

    public function interesado(){
    	return $this->belongsTo('App\Interesados');	
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

}
