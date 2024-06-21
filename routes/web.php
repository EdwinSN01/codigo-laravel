<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; // Agrega este use statement
use App\Http\Controllers\Servicios2Controller; // Agrega este use statement

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios',[ServiciosController::class, 'index'])->name('servicios'); // Corrige la ruta utilizando el alias de clase
//Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

//Route::get('/servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');
Route::view('contacto','contacto')->name('contacto');
//Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
//Route::get('/servicios',[ServiciosController::class,'store'])->name('servicios.store');
//Route::get('/servicios', 'ServiciosController@store')->name('servicios.store');
//Route::get('/servicios/create', 'ServicioController@create')->name('servicios.create');
 //Route::get('servicios', 'ServiciosController@index')->name('servicios.index');
// Route::get('servicios/crear', 'ServiciosController@create')->name('servicios.create');
Route::get('/servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');

Route::get('servicios/{id}/editar', [ServiciosController::class, 'edit'])->name('servicios.edit');
Route::patch('servicios/{id}', [ServiciosController::class, 'update'])->name('servicios.update');
Route::delete('servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');

 Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
 Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');
 Route::get('/servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');
