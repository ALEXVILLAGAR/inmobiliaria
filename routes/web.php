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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/inmuebles', 'inmuebles');

Route::get('/propiedad_bodega', function () {
    return view('propiedad_bodega');
});

Route::get('/propiedad_casa', function () {
    return view('propiedad_casa');
});

Route::get('/propiedad_apartamento', function () {
    return view('propiedad_apartamento');
});

Route::get('/propiedad_finca', function () {
    return view('propiedad_finca');
});

Route::get('/propiedad_lote', function () {
    return view('plantilla_propiedad');
});

Route::get('/apartamento', function () {
    return view('apartamento');
});

Route::get('/casa', function () {
    return view('casa');
});

Route::get('/lote', function () {
    return view('lote');
});
Route::get('/bodega', function () {
    return view('bodega');
});

Route::get('/finca', function () {
    return view('finca');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/perfil_admin', function () {
    return view('admin.perfil');
});

Route::get('/detalles_admin', function () {
    return view('admin.detalles');
});

Route::get('/user_admin', function () {
    return view('admin.administrador');
});

Route::resource('Person', 'PersonController');
Route::resource('Company', 'CompanyController');

Route::resource('User', 'UserController', ['except' => 'destroy']);
Route::get('User/destroy/{user}', 'UserController@destroy');
Route::get('/Person/Active/{user}', 'UserController@active')->name('active.user');
