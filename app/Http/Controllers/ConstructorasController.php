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
        $constructora->idCliente = Auth::user()->idCliente;
        $constructora->save();

        flash('Constructora creada de forma exitosa')->success();
        return redirect()->route('constructoras.create');
    }

    public function destroy($id){
        $constructora = Propietario::find($id);
        $constructora->delete();

        flash('Constructora elminada de forma exitosa')->error();
        return redirect()->route('constructoras.index');
    }

	public function edit($id){
        $constructora = Constructora::find($id);
        return view('constructoras.edit')->with('constructora',$constructora);
	}
	
	public function update(ConstructoraRequest $request, $id){
        $constructora = Constructora::find($id);

        //Cambio el nombre a los indices para que sean iguales que en la base
        $arrConstructora = $request->all();
        $arrConstructora['idLocalidad'] = $arrConstructora['slcLocalidad'];
        unset($arrConstructora['slcLocalidad']);

        //toma el objeto de la base y lo remplaza por lo del form
        $constructora->fill($arrConstructora);
        $constructora->save();
        
        flash('Constructora modificada con exito')->warning();
        return redirect()->route('constructoras.index');
	}

}
