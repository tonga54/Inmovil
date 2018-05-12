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


Route::group(['middleware' => 'auth','prefix' => 'sistema'], function(){

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
});

Route::get('logout',[
		//Que controlador usar
		'uses'	=> 'Auth\LoginController@logout',
		//nombre a la ruta
		'as'	=> 'logout' 
]);

Auth::routes();
Route::get('', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

