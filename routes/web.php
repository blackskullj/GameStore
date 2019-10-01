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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('captura', 'ProductoController@index')->name('captura');
Route::post('guardar', 'ProductoController@store')->name('guardar');

Route::get('ver-productos', 'ProductoController@show')->name('ver-productos');
