<?php
use App\Http\Controllers\verTareaController;
use App\Http\Controllers\NuevaControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/newTarea', function(){
    return view('AñadirTarea');
});

Route::get('/newClient', function(){
    return view('AñadirCliente');
});

Route::get('/inicio', function(){
    return view('menu');
});

Route::get('/verTareas', function(){
    return view('verTareas');
});

Route::resource('tareas', NuevaControlador::class);
Route::resource('operario', NuevaControlador::class);


?>