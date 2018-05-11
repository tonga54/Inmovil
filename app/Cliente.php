<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{

    protected $table = "clientes";

    protected $fillable = ['rut', 'nombre', 'apellido', 'nombreEmpresa', 'idLocalidad', 'idBarrio', 'direccion', 'email'];

    public function localidad(){
    	return $this->belongsTo('App\Localidad','idLocalidad');
    }

    public function barrio(){
        return $this->belongsTo('App\barrio','idBarrio');
    }

    public function pagos(){
    	return $this->hasMany('App\Pago');
    }

    public function usuario(){
    	return $this->hasOne('App\Usuario');	
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

    public function operaciones(){
        return $this->hasMany('App\Operacion');
    }
    
}
