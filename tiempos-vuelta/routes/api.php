<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\CircuitoController;
use App\Http\Controllers\DetallesCocheController;
use App\Http\Controllers\DetallesCircuitoController;
use App\Http\Controllers\UsuarioCocheController;
use App\Http\Controllers\UsuarioCircuitoController;
use App\Http\Controllers\UsuarioCircuitoCocheController;

// Endpoints para Usuarios
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

// Endpoints para Coches
Route::get('/coches', [CocheController::class, 'index']);
Route::post('/coches', [CocheController::class, 'store']);
Route::get('/coches/{id}', [CocheController::class, 'show']);
Route::put('/coches/{id}', [CocheController::class, 'update']);
Route::delete('/coches/{id}', [CocheController::class, 'destroy']);

// Endpoints para Circuitos
Route::get('/circuitos', [CircuitoController::class, 'index']);
Route::post('/circuitos', [CircuitoController::class, 'store']);
Route::get('/circuitos/{id}', [CircuitoController::class, 'show']);
Route::put('/circuitos/{id}', [CircuitoController::class, 'update']);
Route::delete('/circuitos/{id}', [CircuitoController::class, 'destroy']);

// Endpoints para Detalles de Coches
Route::get('/detalles-coches', [DetallesCocheController::class, 'index']);
Route::post('/detalles-coches', [DetallesCocheController::class, 'store']);
Route::get('/detalles-coches/{id}', [DetallesCocheController::class, 'show']);
Route::put('/detalles-coches/{id}', [DetallesCocheController::class, 'update']);
Route::delete('/detalles-coches/{id}', [DetallesCocheController::class, 'destroy']);

// Endpoints para Detalles de Circuitos
Route::get('/detalles-circuitos', [DetallesCircuitoController::class, 'index']);
Route::post('/detalles-circuitos', [DetallesCircuitoController::class, 'store']);
Route::get('/detalles-circuitos/{id}', [DetallesCircuitoController::class, 'show']);
Route::put('/detalles-circuitos/{id}', [DetallesCircuitoController::class, 'update']);
Route::delete('/detalles-circuitos/{id}', [DetallesCircuitoController::class, 'destroy']);

// Endpoints para relaciones
Route::post('/usuario-coche', [UsuarioCocheController::class, 'store']);
Route::post('/usuario-circuito', [UsuarioCircuitoController::class, 'store']);
Route::post('/usuario-circuito-coche', [UsuarioCircuitoCocheController::class, 'store']);
