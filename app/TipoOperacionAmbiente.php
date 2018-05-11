<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOperacionAmbiente extends Model
{
    protected $table = "toper_ambientes";


    protected $fillable = ['idTpoOper', 'idAmbientes'];
}
