<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; // Agrega este use statement
use App\Http\Controllers\Servicios2Controller; // Agrega este use statement

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
//Route::get('servicios',[Servicios2Controller::class, 'index'])->name('servicios'); // Corrige la ruta utilizando el alias de clase

Route::view('contacto','contacto')->name('contacto');
Route::resource('servicios', Servicios2Controller::class)->only('index','show');

