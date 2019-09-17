<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MlCategorias2 extends Model
{
    protected $table = "mlcategorias2";
    protected $primaryKey = 'parentId';
    public $incrementing = false;
    protected $fillable = ['id', 'parentId', 'name'];

    public function mlCategorias1()
    {
        return $this->belongsTo('App\MlCategorias1', 'id', 'parentId');
    }

    public function mlCategorias3()
    {
        return $this->belongsTo('App\MlCategorias3','id','parentId');
    }

    public function tiposOperaciones(){
        return $this->hasMany('App\Inmueble');
    }
}
