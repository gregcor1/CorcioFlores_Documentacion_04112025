<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/nuevousuario', [AuthController::class, 'crearUsuario']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/usuario', [AuthController::class, 'obtenerUsuario']);
});

Route::get('/zonas',[ZonaController::class,'obtenerZonas']); //PLURAL
Route::get('/zona/{idzona}',[ZonaController::class,'obtenerZona']); //SINGULAR
Route::get('/zonaspais/{idpais}',[ZonaController::class,'obtenerZonaPais']);
Route::post('/nuevozona',[ZonaController::class,'crearZona']); 