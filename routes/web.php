<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\Ejemplo3Controller;
use App\Http\Controllers\PaginasController;

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

Route::get('/', [PaginasController::class, 'inicio']);
// Route::get('/inicio', [PaginasController::class, 'inicio']);
Route::redirect('/inicio', '/');

Route::get('/serveis-web', [PaginasController::class, 'serveisweb']);
Route::get('/formation-business-help', [PaginasController::class, 'fbh']);
Route::get('/contacto', [PaginasController::class, 'contacto']);

// Route::get('/contacto', function () {
//     return "Formulario de contacto";
// });

// Route::get('/{id}', function ($id) {
//     return "Nuestro post es el número " . $id;
// });

// Route::get('/{id}/{nombre}', function ($id,$nombre) {
//     return "Nuestro post es el número " . $id . " y creado por " . $nombre;
// }) -> where ('nombre', '[a-z]+');

// Route::get('/inicio', [EjemploController::class, 'inicio']);
 
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/index/{id}', [Ejemplo3Controller::class, 'index']);