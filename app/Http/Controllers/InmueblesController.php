<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MlCategorias1;
use App\MlCategorias2;
use App\MlCategorias3;
use App\MlCategorias4;
use App\Localidad;
use App\Barrio;
use App\Constructora;
use App\Propietario;

//MUY IMPORTANTE
use Illuminate\Support\Facades\Auth;

class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Inmuebles.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $tiposInmuebles = MlCategorias1::orderBy('name', 'ASC')->pluck('name','id')->toArray();
        // $tiposOperaciones = TipoOperacion::orderBy('nombre', 'ASC')->pluck('nombre','id')->toArray();
        $localidades = Localidad::orderBy('nombre', 'ASC')->pluck('nombre','id')->toArray();
        $barrios = Barrio::orderBy('nombre', 'ASC')->pluck('nombre','id')->toArray();
        // $caracteristicas = Caracteristica::orderBy('tipo','ASC')->get();
        $propietarios = Propietario::where('idCliente', Auth::user()->idCliente)->orderBy('nombre', 'ASC')->pluck('nombre','id')->toArray();
        $constructoras = Constructora::where('idCliente', Auth::user()->idCliente)->orderBy('nombre', 'ASC')->pluck('nombre','id')->toArray();
        // dd(MlCategorias1::orderBy('name')->pluck('name','id')->toArray());
        // return view('Inmuebles.create',['tiposOperaciones' => $tiposOperaciones, 'localidades' => $localidades, 'barrios' => $barrios, 'propietarios' => $propietarios, 'constructoras' => $constructoras, 'caracteristicas' => $caracteristicas]);
        return view('Inmuebles.create',['tiposInmuebles' => $tiposInmuebles, 'localidades' => $localidades, 'barrios' => $barrios, 'propietarios' => $propietarios, 'constructoras' => $constructoras]);
        //return view("Inmuebles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function obtenerTiposOperaciones()
    {
        $parentId = $_GET['idCategoriaPadre'];
        $json = MlCategorias2::where('parentId', $parentId)->get()->toJson();
        echo $json;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function obtenerAtributosTipoOperacion(){
        $parentId = $_GET['idTipoOperacion'];
        $json = MlCategorias3::where('parentId', $parentId)->get()->load("mlcategorias4");
        $json = $json->toJson();
        echo($json);
    }
}
