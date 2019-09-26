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
Route::get('/', 'PersonasController@index')->name('inicio');

Route::post('/', 'PersonasController@store')->name('store');

Route::post('/', 'PersonasController@index')->name('mostrar');

Route::get('/{id}', 'PersonasController@edit')->name('editar');

Route::put('/{id}','PersonasController@update')->name('update');

Route::delete('/{id}', 'PersonasController@destroy')->name('delete');