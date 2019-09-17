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

    public function tipoInmueble(){
        return $this->belongsTo('App\MlCategorias1');
    }

    public function tipoOperacion()
    {
        return $this->belongsTo('App\MlCategorias2');
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

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function atributos()
    {
        return $this->belongsToMany('App\MlCategorias3', 'id');
    }

    public function atributosListables()
    {
        return $this->belongsToMany('App\MlCategorias4', 'id');
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }

}
