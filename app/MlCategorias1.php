<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MlCategorias1 extends Model
{
    protected $table = "mlcategorias1";
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id', 'name'];

    public function mlCategorias2()
    {
        return $this->hasMany('App\MlCategorias2', 'parentId', 'id');
    }

    public function inmuebles(){
        return $this->hasMany('App\Inmueble', 'id', 'mlCategorias1');
    }
    
}
