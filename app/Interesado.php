<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesado extends Model
{
    protected $table = "interesados";


    protected $fillable = ['nombre', 'apellido', 'telefono', 'email', 'idLocalidad', 'idBarrio', 'idCliente'];

    public function localidad()
    {
        return $this->belongsTo('App\Localidad','idLocalidad');
    }

    public function barrio()
    {
        return $this->belongsTo('App\Barrio','idBarrio');
    }

    public function operaciones()
    {
        return $this->hasMany('App\Operacion');
    }

    public function inmuebles()
    {
        return $this->belongsToMany('App\Inmueble');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente','idCliente');
    }

    public function scopeEmail($query, $email)
    {
        return $query->where('email','LIKE', "%" . $email . "%");   
    }

    public function scopeNombre($query, $nombre)
    {
        return $query->where('nombre','LIKE', "%" . $nombre . "%");   
    }

    public function scopeTelefono($query, $telefono)
    {
        return $query->where('telefono','LIKE', "%" . $telefono . "%");   
    }

}
