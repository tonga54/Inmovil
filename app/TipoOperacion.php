<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOperacion extends Model
{
    protected $table = "tiposoperaciones";


    protected $fillable = ['id','nombre'];

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

}
