<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOperacionComodidad extends Model
{
    protected $table = "toper_comodidades";


    protected $fillable = ['idTpoOper', 'idComodidades'];
}
