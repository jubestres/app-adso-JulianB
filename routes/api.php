<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadicadoPQRController; 
use App\Http\Controllers\ProyectoController; 
use App\Http\Controllers\RespuestaPQRController; 
use App\Http\Controllers\AreaRespuestaController; 
use App\Http\Controllers\ClienteController; 
use App\Http\Controllers\BarrioController; 
use App\Http\Controllers\PQRController; 
use App\Http\Controllers\TipoSolicitudController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para RadicadoPQRController
Route::post('/radicadopqr/save', [RadicadoPQRController::class, 'save']);
Route::get('/radicadopqr/get', [RadicadoPQRController::class, 'get']);
Route::put('/radicadopqr/update', [RadicadoPQRController::class, 'update']);
Route::delete('/radicadopqr/delete', [RadicadoPQRController::class, 'delete']);

// Rutas para ProyectoController
Route::post('/proyecto/save', [ProyectoController::class, 'save']);
Route::get('/proyecto/get', [ProyectoController::class, 'get']);
Route::put('/proyecto/update', [ProyectoController::class, 'update']);
Route::delete('/proyecto/delete', [ProyectoController::class, 'delete']);

// Rutas para RespuestaPQRController
Route::post('/respuestapqr/save', [RespuestaPQRController::class, 'save']);
Route::get('/respuestapqr/get', [RespuestaPQRController::class, 'get']);
Route::put('/respuestapqr/update', [RespuestaPQRController::class, 'update']);
Route::delete('/respuestapqr/delete', [RespuestaPQRController::class, 'delete']);

// Rutas para AreaRespuestaController
Route::post('/arearespuesta/save', [AreaRespuestaController::class, 'save']);
Route::get('/arearespuesta/get', [AreaRespuestaController::class, 'get']);
Route::put('/arearespuesta/update', [AreaRespuestaController::class, 'update']);
Route::delete('/arearespuesta/delete', [AreaRespuestaController::class, 'delete']);

// Rutas para ClienteController
Route::post('/cliente/save', [ClienteController::class, 'save']);
Route::get('/cliente/get', [ClienteController::class, 'get']);
Route::put('/cliente/update', [ClienteController::class, 'update']);
Route::delete('/cliente/delete', [ClienteController::class, 'delete']);

// Rutas para BarrioController (Corregido)
Route::post('/barrio/save', [BarrioController::class, 'save']);
Route::get('/barrio/get', [BarrioController::class, 'get']);
Route::put('/barrio/update', [BarrioController::class, 'update']);
Route::delete('/barrio/delete', [BarrioController::class, 'delete']);

// Rutas para PQRController
Route::post('/pqr/save', [PQRController::class, 'save']);
Route::get('/pqr/get', [PQRController::class, 'get']);
Route::put('/pqr/update', [PQRController::class, 'update']);
Route::delete('/pqr/delete', [PQRController::class, 'delete']);

// Rutas para TipoSolicitudController
Route::post('/tiposolicitud/save', [TipoSolicitudController::class, 'save']);
Route::get('/tiposolicitud/get', [TipoSolicitudController::class, 'get']);
Route::put('/tiposolicitud/update', [TipoSolicitudController::class, 'update']);
Route::delete('/tiposolicitud/delete', [TipoSolicitudController::class, 'delete']);
