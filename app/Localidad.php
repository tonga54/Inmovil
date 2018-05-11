<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{

    protected $table = "localidades";


    protected $fillable = ['nombre'];

    public function barrios(){
        return $this->hasMany('App\Barrio');
    }

    public function clientes(){
    	return $this->hasMany('App\Cliente','id');
    }

    public function constructoras(){
    	return $this->hasMany('App\Constructora');
    }

    public function propietarios(){
    	return $this->hasMany('App\Propietario');
    }

    public function interesados(){
    	return $this->hasMany('App\Interesado');
    }

    public function inmuebles(){
    	return $this->hasMany('App\Inmueble');
    }
    
}
