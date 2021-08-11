<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    //Si ponemos algo después de la diagonal, es como poner una dirección web, sólo si escribes localchost/posts aparecerá lo que pusiste en el view
    //return view('welcome');
    return view('posts.index');
    //posts es la carpeta contenedora, usamos un punto en lugar de una diagonal para acceder a otra carpeta o a un archivo, es una dirección
});
