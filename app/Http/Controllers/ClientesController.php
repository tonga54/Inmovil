<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
    	$cliente = Cliente::find($id);
    	$cliente->localidad;
    	$cliente->barrio;
    	
    	return view('Clientes.mostrar',['cliente' => $cliente]);
    }

    public function create(){

    }

    public function store(Request $request){
    	
    }

}
