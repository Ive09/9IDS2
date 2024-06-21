<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\EtapasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//APIs SERVICIO
Route::post('/servicio/guardar',[ServiciosController::class, 'storeapi']);
Route::get('/servicios',[ServiciosController::class, 'listapi']);
Route::post('/servicio/eliminar',[ServiciosController::class, 'deleteapi']);
Route::post('/servicio',[ServiciosController::class, 'show']);

//APIs ETAPA
Route::post('/etapa/guardar',[EtapasController::class, 'storeapi']);
Route::post('/etapas',[EtapasController::class, 'listapi']);
Route::post('/etapa/eliminar',[EtapasController::class, 'deleteapi']);
Route::post('/etapa',[EtapasController::class, 'show']);

//APIs AUTO
Route::post('/auto/guardar',[AutosController::class, 'storeapi']);
Route::get('/autos',[AutosController::class, 'listapi']);
Route::post('/auto/eliminar',[AutosController::class, 'deleteapi']);
Route::post('/auto',[AutosController::class, 'show']);

//API LOGIN
Route::post('login', [LoginController::class, 'login']);

//API REGISTRAR USUARIO
Route::post('/crear',[UserController::class, 'crear']);