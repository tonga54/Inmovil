<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Interesado;
use App\Http\Requests\InteresadoRequest;
use App\Http\Requests\InteresadoRequestUpdate;

class InteresadosController extends Controller
{
    public function index()
    {	
        $interesados = Interesado::all();
        foreach ($interesados as $value) {
            $value->localidad;
            $value->barrio;
        }
    	return view('Interesados.index')->with('interesados',$interesados);
    }

    public function show(){
    	return view('Interesados.mostrar');
    }

    public function create(){
    	return view('interesados.create');
    }

    public function store(InteresadoRequest $request){
        $arrInteresado = $request->all();

        //Cambio el nombre a los indices para que sean iguales que en la base
        $arrInteresado['idLocalidad'] = $arrInteresado['slcLocalidad'];
        unset($arrInteresado['slcLocalidad']);
        $arrInteresado['idBarrio'] = $arrInteresado['slcBarrios'];
        unset($arrInteresado['slcBarrios']);

    	$interesado = new Interesado($arrInteresado);
        $interesado->idCliente = 1;
        $interesado->save();

        flash('Interesado agregado con exito')->success();
        return redirect()->route('interesados.create');

    }

    public function destroy($id){
        $interesado = Interesado::find($id);
        $interesado->delete();

        flash('Interesado elminado de forma exitosa')->error();
        return redirect()->route('interesados.index');
    }

    public function edit($id){
        $interesado = Interesado::find($id);
        return view('interesados.edit')->with('interesado',$interesado);
    }

    public function update(InteresadoRequestUpdate $request, $id){
        $interesado = Interesado::find($id);

        //Cambio el nombre a los indices para que sean iguales que en la base
        $arrInteresado = $request->all();
        $arrInteresado['idLocalidad'] = $arrInteresado['slcLocalidad'];
        unset($arrInteresado['slcLocalidad']);
        $arrInteresado['idBarrio'] = $arrInteresado['slcBarrios'];
        unset($arrInteresado['slcBarrios']);

        //toma el objeto de la base y lo remplaza por lo del form
        $interesado->fill($arrInteresado);
        $interesado->save();
        
        flash('Interesado modificado con exito')->warning();
        return redirect()->route('interesados.index');
    }

}
