<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Ejemplo3Controller;
 

/*
| Web Routes
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [EjemploController::class, 'inicio'] );

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/index', [Ejemplo3Controller::class, 'index']);


// Route::get('/', function () {
//     return "Inicio Home";
// });

// Route::get('/contacto', function () {
//     return "Este es el formulario de contacto";
// });

// Route::get('/cursos', function () {
//     return "Esta es la página de cursos";
// });

//Rutas con parámetros
// Route::get('/post/{id}', function ($id) {
//     return "Esta es la publicación con la id: " . $id;
// });

// Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
//     return "Esta es la publicación con la id: " . $id . " y el nombre del autor es: " . $nombre;
// })->where('nombre', '[a-zA-Z]+');

// Route::get('/greeting', function () {
//     return 'Hello World';
// });