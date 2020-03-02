<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MlCategorias4 extends Model
{
    protected $table = "mlcategorias4";
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'parentId', 'name'];

    public function mlCategorias3()
    {
        return $this->belongsTo('App\MlCategorias3', 'id', 'parentId');
    }

    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble', 'inmuebles_mlcategorias4', 'idInmueble', 'idMlCategoria4');
    }
}
