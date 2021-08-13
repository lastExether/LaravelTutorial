<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
//Para aplicar correctamente una ruta necesitas importar la clase como aquí arriba

Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard');
Route::get('/register', [RegisterController::class, 'index']) -> name('register');
Route::post('/register', [RegisterController::class, 'store']);
//Route busca la vista 'register' en la clase RegisterController dentro de la función index
//Básicamente le pasamos la dirección de lo que queremos mostrar
//Las vistas se escriben en la dirección, ejemplo localhost/register
//Para las vistas debemos crearla en la carpeta views dentro de resources
//Si le asignamos un nombre a esa ruta podemos acceder a ella desde cualquier parte del proyecto
//aunque se cambie la ruta
//Post

Route::get('/posts', function () {
    //Si ponemos algo después de la diagonal, es como poner una dirección web, sólo si escribes localchost/posts aparecerá lo que pusiste en el view
    //return view('welcome');
    return view('posts.index');
    //posts es la carpeta contenedora, usamos un punto en lugar de una diagonal para acceder a otra carpeta o a un archivo, es una dirección
}) -> name('posts');
