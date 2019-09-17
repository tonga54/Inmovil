<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MlCategorias3 extends Model
{
    protected $table = "mlcategorias3";
    public $incrementing = false;
    protected $primaryKey = 'parentId';
    protected $fillable = ['id', 'parentId', 'name', 'value_type', 'attribute_group_name', 'value_max_length'];

    public function mlCategorias2()
    {
        return $this->hasMany('App\MlCategorias2','id','parentId');
    }

    public function mlCategorias4()
    {
        return $this->hasMany('App\MlCategorias4', "parentId", "id");
    }

    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble');
    }
}
