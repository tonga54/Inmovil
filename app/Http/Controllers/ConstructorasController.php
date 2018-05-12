<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constructora;
use App\Http\Requests\ConstructoraRequest;

//MUY IMPORTANTE
use Illuminate\Support\Facades\Auth;

class ConstructorasController extends Controller
{
    public function index()
    {
        $constructoras = Constructora::where('idCliente', Auth::user()->idCliente)->orderBy('nombre', 'desc')->paginate(10);
    	//$constructoras = Constructora::all();
    	foreach ($constructoras as $value) {
            $value->localidad;
        }
    	
    	return view('Constructoras.index',['constructoras' => $constructoras]);
    }

    public function show($id){
    	//return view('constructoras.create');
    }

    public function create(){
        return view('constructoras.create');
    }

    public function store(ConstructoraRequest $request){
    	$arrConstructora = $request->all();

        //Cambio el nombre a los indices para que sean iguales que en la base
        $arrConstructora['idLocalidad'] = $arrConstructora['slcLocalidad'];
        unset($arrConstructora['slcLocalidad']);

        $constructora = new Constructora($arrConstructora);
        $constructora->idCliente = 1;
        $constructora->save();

        flash('Constructora creada de forma exitosa')->success();
        return redirect()->route('constructoras.create');
    }

    public function destroy($id){

    }

	public function edit($id){

	}
	
	public function update(ConstructoraRequest $request, $id){

	}

}
