<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::group(['prefix' => 'clientes'], function(){
	Route::get('view/{id}',[
		//Que controlador usar
		'uses'	=> 'ClientesController@view',
		//nombre a la ruta
		'as'	=> 'clientesView' 
	]);
});
*/

/*Route::group(['prefix' => 'usuarios'], function(){
	//Route::get('')
	//Rou
});
*/
/*
Route::prefix('interesados')->group(function(){
	//Route::get('/interesados', 'InteresadosController@view');
	Route::resource('','InteresadosController');
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'sistema'], function(){

	Route::get('', function (){
		return view('welcome');
	});

	Route::resource('interesados','InteresadosController');
	Route::get('interesados/{id}/destroy',[
		//Que controlador usar
		'uses'	=> 'InteresadosController@destroy',
		//nombre a la ruta
		'as'	=> 'interesados.destroy' 
	]);
	Route::resource('clientes','ClientesController');
	Route::resource('propietarios','PropietariosController');
	Route::resource('constructoras','ConstructorasController');
	//Route::get('interesados/{id}/destroy','InteresadosController@destroy');
});