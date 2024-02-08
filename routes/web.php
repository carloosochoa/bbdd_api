<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('libros', LibroController::class);
Route::resource('autores', AutorController::class);
Route::get('nuevo', [LibroController::class, 'nuevo'])->name('libros.nuevo');
Route::post('filtrar', [LibroController::class,'filtrar'])->name('libros.filtrar');
Route::get('paginaFiltro',[LibroController::class,'paginaFiltro'])->name('libros.paginaFiltro');

Route::get('api/libros',[LibroController::class,'mostrarLibros'])->name("libros.mostrarLibros");
Route::get('api/autores',[AutorController::class,'mostrarAutores'])->name("autores.mostrarAutores");
Route::get('api/libros',[LibroController::class,'mostrarLibros'])->name("libros.mostrarLibros");
Route::get('api/librosPorAutor/{id}',[LibroController::class,'librosPorAutor'])->name("libros.librosPorAutor");
