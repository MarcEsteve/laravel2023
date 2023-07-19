<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Inicio Home";
});

Route::get('/contacto', function () {
    return "Este es el formulario de contacto";
});

Route::get('/cursos', function () {
    return "Esta es la página de cursos";
});

//Rutas con parámetros
// Route::get('/post/{id}', function ($id) {
//     return "Esta es la publicación con la id: " . $id;
// });

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return "Esta es la publicación con la id: " . $id . " y el nombre del autor es: " . $nombre;
})->where('nombre', '[a-zA-Z]+');

Route::get('/greeting', function () {
    return 'Hello World';
});