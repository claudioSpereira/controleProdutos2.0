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
=======



>>>>>>> c685d582fd62a2aef073f58f7a0c53326dd53fd5*/
Route::get('/','ControllerProdutos@welcome');
Route::get('/produto','ControllerProdutos@produto');
Route::get('/pdf','ControllerProdutos@pdf');
