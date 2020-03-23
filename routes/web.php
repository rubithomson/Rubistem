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

Route::get('/','HomeController@welcome');//Nuevo para autenticar antes de acceder

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function(){ //Grupo de rutas disponibles una vez autenticado el usuario.

Route::get('/','HomeController@index')->name('/');//Ruta principal del sistema una vez logueado.

Route::get('/test', 'HomeController@sample'); //Ruta con diseño de ejemplo.
//Aqui va el resto de las rutas.

});
