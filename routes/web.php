<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/form', function(){
    return view('VistaAlta');
});

Route::get('/inicio', function(){
    return view('menu');
});



?>