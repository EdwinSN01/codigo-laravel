<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ServiciosController; // Agrega este use statement
use App\Http\Controllers\Servicios2Controller; // Agrega este use statement
use App\Models\Category;

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
//Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

//Route::get('/servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');
Route::view('contactos','contactos')->name('contactos');
Route::post('/contactos', [ContactosController::class, 'store'])->name('contactos.store');
//Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
//Route::get('/servicios',[ServiciosController::class,'store'])->name('servicios.store');
//Route::get('/servicios', 'ServiciosController@store')->name('servicios.store');
//Route::get('/servicios/create', 'ServicioController@create')->name('servicios.create');
 //Route::get('servicios', 'ServiciosController@index')->name('servicios.index');
// Route::get('servicios/crear', 'ServiciosController@create')->name('servicios.create');
//Route::resource('servicios', ServiciosController::class)->name('servicios')->middleware('auth');

Route::get('/servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');
Route::get('servicios/{id}/editar', [ServiciosController::class, 'edit'])->name('servicios.edit');
Route::patch('servicios/{id}', [ServiciosController::class, 'update'])->name('servicios.update');
Route::delete('servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');

 Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
 Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');
 Route::get('/servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');

 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
 Auth::routes();
 
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
 Route::get('categorias/{category}', [CategoryController::class, 'show'])->name('categories.show');
 DB::listen(function($query)
 {
    var_dump($query->sql);
 });