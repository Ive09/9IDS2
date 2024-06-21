<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\EtapasController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS SERVICIO
Route::get('/servicio', [ServiciosController::class, 'index'])->name('servicio.nuevo');
Route::post('/servicio/guardar', [ServiciosController::class, 'store'])->name('servicio.guardar');
Route::get('/servicios', [ServiciosController::class, 'list'])->name('servicios.lista');
Route::delete('/servicio/eliminar/{id}', [ServiciosController::class, 'delete'])->name('servicio.eliminar');

//RUTAS ETAPA
Route::get('/etapa', [EtapasController::class, 'index'])->name('etapa.nueva');
Route::post('/etapa/guardar', [EtapasController::class, 'store'])->name('etapa.guardar');
Route::get('/etapas', [EtapasController::class, 'list'])->name('etapas.lista');
Route::delete('/etapa/eliminar/{id}', [EtapasController::class, 'delete'])->name('etapa.eliminar');

//RUTAS AUTO
Route::get('/auto', [AutosController::class, 'index'])->name('auto.nuevo');
Route::post('/auto/guardar', [AutosController::class, 'store'])->name('auto.guardar');
Route::get('/autos', [AutosController::class, 'list'])->name('autos.lista');
Route::delete('/auto/eliminar/{id}', [AutosController::class, 'delete'])->name('auto.eliminar');

//RUTAS LOGIN
//Route::get('login', [FormController::class, 'index']);
//Route::post('login', [FormController::class, 'store'])->name('login.store');