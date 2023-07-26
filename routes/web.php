<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\Ejemplo3Controller;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\Ejemplo5Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConnectController;

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
Route::redirect('/home', '/');

Route::get('/serveis-web', [PaginasController::class, 'serveisweb']);
Route::get('/formation-business-help', [PaginasController::class, 'formacion']);
Route::get('/contacto', [PaginasController::class, 'contacto']);

// Route::resource("posts",Ejemplo3Controller::class);
// Route::resource("content",PaginasController::class);

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
 
// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/index/{id}', [Ejemplo3Controller::class, 'index']);

Route::get('/blade', [HomeController::class, 'index']);

Route::get('/ejemplo', [ConnectController::class, 'index'])->name('ejemplo.index');
Route::get('/ejemplo/create', [ConnectController::class, 'create'])->name('ejemplo.create');
Route::post('/ejemplo', [ConnectController::class, 'store'])->name('ejemplo.store');
Route::get('/ejemplo/{ejemplo}/edit', [ConnectController::class, 'edit'])->name('ejemplo.edit');
Route::put('/ejemplo/{ejemplo}', [ConnectController::class, 'update'])->name('ejemplo.update');
Route::delete('/ejemplo/{ejemplo}', [ConnectController::class, 'destroy'])->name('ejemplo.destroy');
Route::get('/ejemplo/{ejemplo}/delete', [ConnectController::class, 'delete'])->name('ejemplo.delete');
