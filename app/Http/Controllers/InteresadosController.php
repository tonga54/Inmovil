<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Interesado;
use App\Http\Requests\InteresadoRequest;
use App\Http\Requests\InteresadoRequestUpdate;

//MUY IMPORTANTE
use Illuminate\Support\Facades\Auth;

class InteresadosController extends Controller
{

    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {	

        // 
        $interesados = Interesado::Email($request->email)->Nombre($request->nombre)->Telefono($request->telefono)->where('idCliente', Auth::user()->idCliente)->orderBy('nombre', 'desc')->paginate(10);
        // dd($interesados);

        foreach ($interesados as $value) {
            $value->localidad;
            $value->barrio;
        }

        //dd($interesados);

    	return view('Interesados.index')->with('interesados',$interesados);
        
    }

    public function show($id){
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
        $interesado->idCliente = Auth::user()->idCliente;
        $interesado->save();

        flash('Interesado creado de forma exitosa')->success();
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
