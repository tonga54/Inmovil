<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";


    protected $fillable = ['user','password','idCliente'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function clientes()
    {
        return $this->belongsTo('App\Cliente');
    }
    
}
