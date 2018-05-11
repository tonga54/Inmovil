<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOperacionCaracteristicaAdicional extends Model
{
    protected $table = "toper_cadic";


    protected $fillable = ['idTpoOper', 'idCra'];
}
