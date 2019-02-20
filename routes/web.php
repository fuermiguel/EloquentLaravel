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

Route::get('crear/{id}','EloquentController@create');
Route::get('mostrar/{id}','EloquentController@show');
Route::get('borrar/{id}','EloquentController@delete');
Route::get('perfil/{id}','EloquentController@showUser');
