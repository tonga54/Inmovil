<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propietario;
use App\Http\Requests\PropietarioRequest;

//MUY IMPORTANTE
use Illuminate\Support\Facades\Auth;

class PropietariosController extends Controller
{
    public function index()
    {
    	$propietarios = Propietario::where('idCliente', Auth::user()->idCliente)->orderBy('nombre', 'desc')->paginate(10);
        foreach ($propietarios as $value) {
            $value->localidad;
            $value->barrio;
        }

        return view('propietarios.index',['propietarios' => $propietarios]);
    }

    public function show($id){
    	// return view('propietarios.create');
    }

    public function create(){
        return view('propietarios.create');
    }

    public function store(PropietarioRequest $request){
    	$arrPropietario = $request->all();

        //Cambio el nombre a los indices para que sean iguales que en la base
        $arrPropietario['idLocalidad'] = $arrPropietario['slcLocalidad'];
        unset($arrPropietario['slcLocalidad']);
        $arrPropietario['idBarrio'] = $arrPropietario['slcBarrios'];
        unset($arrPropietario['slcBarrios']);

        $propietario = new Propietario($arrPropietario);
        $propietario->idCliente = 1;
        $propietario->save();

        flash('Propietario agregado con exito')->success();
        return redirect()->route('propietarios.create');
    }

    public function destroy($id){

    }

	public function edit($id){

	}
	
	public function update(PropietarioRequest $request, $id){

	}
    
}
