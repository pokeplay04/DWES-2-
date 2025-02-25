<?php
use App\Http\Controllers\operarioControlador;
use App\Http\Controllers\NuevaControlador;
use App\Http\Controllers\clienteControlador;
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

Route::resource('tarea', NuevaControlador::class);

//cambiar a futuro por controlador de operarios
Route::resource('operario', operarioControlador::class);

Route::resource('cliente', clienteControlador::class);
Route::resource('cliente', 'App\Http\Controllers\clienteControlador');
?>