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

Route::get('/', function () {
    return view('welcome');
});


//Rotas clubes

Route::get('/clubes', 'ControladorClube@index');
Route::post('/clube', 'ControladorClube@store');
Route::get('/clube/novo', 'ControladorClube@create');
Route::get('/clube/apagar/{id}', 'ControladorClube@destroy');
Route::get('/clube/editar/{id}', 'ControladorClube@edit');
Route::post('/clube/editar/{id}', 'ControladorClube@update');


// Rotas atletas

Route::get('/atletas', 'ControladorAtleta@index');
Route::get('/atleta', 'ControladorAtleta@index');

Route::get('/atleta/novo', 'ControladorAtleta@create');

Route::post('/atleta', 'ControladorAtleta@store');