<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InmuebleInteresado extends Model
{
    protected $table = "inmuebles_interesado";


    protected $fillable = ['idInmueble', 'idInteresado', 'descripcion', 'fecha'];
}
