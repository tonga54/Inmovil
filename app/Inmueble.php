<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Inmueble extends Model
{
    use Sluggable;
  
    protected $table = "inmuebles";

    protected $fillable = ['supTotal', 'supCubierta', 'dormitorios', 'banos', 'cocheras', 'pisos', 'antiguedad', 'orientacion', 'precio', 'idTipoOperacion', 'estado', 'descripcion', 'idLocalidad', 'idBarrio', 'direccion', 'idPropietario', 'idConstructora'];

    public function operacion()
    {
        return $this->belongsTo('App\Operacion');
    }

    public function propietario()
    {
        return $this->belongsTo('App\Propietario');
    }

    public function constructora()
    {
        return $this->belongsTo('App\Constructora');
    }

    public function tiposOperacion()
    {
        return $this->belongsTo('App\TipoOperacion');
    }

    public function barrio()
    {
        return $this->belongsTo('App\Barrio');
    }

    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }

    public function interesados()
    {
        return $this->belongsToMany('App\Interesado');
    }
    
    public function caracteristicas()
    {
        return $this->belongsToMany('App\Caracteristica');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }

}
