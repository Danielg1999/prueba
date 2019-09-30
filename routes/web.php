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

use App\Http\Controllers\PersonasController;
use App\Persona;

Route::get('/', function(){
    return view('inicio');
});
Auth::routes();


Route::get('/personas', 'PersonasController@index')->name('personas');

//Route::get('/mostrar', 'PersonasController@show')->name('show');

Route::post('/', 'PersonasController@store')->name('store');

Route::post('/inicio', 'PersonasController@index')->name('mostrar');

Route::get('/editar/{id}/editar', 'PersonasController@edit')->name('editar');

Route::put('/actualizar/{id}/actualizar','PersonasController@update')->name('mostrar');

Route::delete('/eliminar/{id}/eliminar', 'PersonasController@destroy')->name('delete');