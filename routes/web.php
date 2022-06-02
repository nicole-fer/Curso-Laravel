<?php

use App\Models\User;
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



Route::get('user/{user}', function(\App\Models\User $user){
    return $user;
});


// Agrupamento de Rotas

Route::prefix('usuarios') ->group(function(){
    Route::get('', function(){
        return 'usuário';
    })->name('usuarios');

    Route::get('/{id}', function(){
        return 'Mostrar Detalhes';
    })->name('usuarios.show');

    Route::get('/{id}/tags', function(){
        return 'Tags do Usuário';
    })->name('usuarios.tags');
});

///{string?} se torna opcional
Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
   /*  return view('welcome'); */
});

// primeiro parametro é a barra da rota e a segunda é a função
Route::get('/users/{paramA}/{paramB}', function ($paramA,$paramB) {
    return $paramA . ' - ' . $paramB;
   /*  return view('welcome'); */
});

