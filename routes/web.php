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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('medicaments', 'MedicamentController');

Route::resource('eps', 'EpsController');

Route::resource('formulas', 'formulasController');

Route::get('usuarios', '\App\Http\Controllers\HomeController@usuarios')->name('usuarios');
