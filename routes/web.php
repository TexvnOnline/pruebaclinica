<?php

use Illuminate\Support\Facades\Route;

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

route::resource('user', 'UserController')->names('users');

Route::get('/prueba/registro', function () {
    return view('prueba');
})->name('registro');


Route::get('/prueba/inicio', function () {
    return view('login');
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
