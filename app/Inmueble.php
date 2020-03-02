<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Inmueble extends Model
{
    use Sluggable;
  
    protected $table = "inmuebles";
    protected $primaryKey = 'id';
    protected $fillable = ['supTotal', 'supCubierta', 'dormitorios', 'banos', 'cocheras', 'pisos', 'antiguedad', 'orientacion', 'precio', 'idTipoOperacion', 'estado', 'descripcion', 'idLocalidad', 'idBarrio', 'direccion', 'idPropietario', 'idConstructora'];

    public function operacion()
    {
        return $this->belongsTo('App\Operacion');
    }

    public function propietario()
    {
        return $this->belongsTo('App\Propietario', 'idPropietario', 'id');
    }

    public function constructora()
    {
        return $this->belongsTo('App\Constructora', 'idConstructora', 'id');
    }

    public function mlCategorias1(){
        return $this->belongsTo('App\MlCategorias1', 'mlCategorias1', 'id');
    }

    public function mlCategorias2()
    {
        return $this->belongsTo('App\MlCategorias2', 'mlCategorias2', 'id');
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

    public function mlCategorias3()
    {
        return $this->belongsToMany('App\MlCategorias3', 'inmuebles_mlcategorias3', 'id', 'idMlCategoria3');
    }

    public function mlCategorias4()
    {
        return $this->belongsToMany('App\MlCategorias4', 'inmuebles_mlcategorias4', 'idInmueble', 'idMlCategoria4');
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }

}
