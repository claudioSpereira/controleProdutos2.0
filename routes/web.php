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

// testando meu git hub
=======*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','ControllerProdutos@welcome');
Route::get('/produto','ControllerProdutos@produto');
Route::get('/pdf','ControllerProdutos@pdf');
