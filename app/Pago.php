<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = "pagos";


    protected $fillable = ['fchCobro', 'fchAbonado', 'monto', 'idCliente'];

    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
}
