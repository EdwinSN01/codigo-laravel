<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; // Agrega este use statement
use App\Http\Controllers\Servicios2Controller; // Agrega este use statement



Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
//Route::get('servicios',[ServiciosController::class, 'index'])->name('servicios'); // Corrige la ruta utilizando el alias de clase

Route::view('contacto','contacto')->name('contacto');
//Route::get('servicios','ServiciosController@index')->name('servicios');
Route::get('/servicios', [ServiciosController::class, 'index']);
//Route::resource('servicios', ServiciosController::class)->only('index','show');