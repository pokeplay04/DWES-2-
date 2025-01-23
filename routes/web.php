<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/form', function(){
    return view('VistaAlta');
});





?>