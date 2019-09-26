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

Route::get('/', function(){
    return view('inicio');
});
Auth::routes();
Route::get('/', 'PersonasController@index')->name('inicio');

Route::post('/', 'PersonasController@store')->name('store');

Route::post('/inicio', 'PersonasController@index')->name('mostrar');

Route::get('/{id}', 'PersonasController@edit')->name('editar');

Route::put('/editar/{id}/editar','PersonasController@update')->name('update');

Route::delete('/eliminar{id}', 'PersonasController@destroy')->name('delete');