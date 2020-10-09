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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'esAdministrador']], function () {
    Route::get('/administrador', 'Administrador\DashboardController@index')->name('administrador.index');
});

Route::group(['middleware' => ['auth', 'esCliente']], function () {
    Route::get('/cliente', 'Cliente\DashboardController@index')->name('cliente.index');

});
