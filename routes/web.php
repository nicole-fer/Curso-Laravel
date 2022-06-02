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
// primeiro parametro é a barra da rota e a segunda é a função
Route::get('/hello-world', function () {
    return 'Olá Mundo!!';
   /*  return view('welcome'); */
});

Route::get('/', function () {
    return 'deu certo';
   /*  return view('welcome'); */
});
