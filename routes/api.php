<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AreaAVisitarController;
use App\Http\Controllers\ClaseDeVisitaController;
use App\Http\Controllers\RegistroFinalController;

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

//EJEMPLO DE COMO CREAR LAS RUTAS POR INDIVIDUAL
// Route::post('/administrador/crear', [AdministradorController::class, 'crearDatos']);
// Route::get('/administrador/buscar', [AdministradorController::class, 'obtenerDatos']);
// Route::put('/administrador/actualizar', [AdministradorController::class, 'actualizarDatos']);
// Route::delete('/administrador/eliminar', [AdministradorController::class, 'eliminarDatos']);


//EJEMPLO DE COMO CREAR LARS RUTAS EN GRUPO (ADMINISTRADOR)
Route:: controller(AdministradorController::class)->group(function(){
    Route:: post('/administrador/crear','crearDatos');
    Route:: get('/administrador/buscar','obtenerDatos');
    Route:: put('/administrador/actualizar','actualizarDatos');
    Route:: delete('/administrador/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE AREA A VISITAR
Route:: controller(AreaAVisitarController::class)->group(function(){
    Route:: post('/areas/crear','crearDatos');
    Route:: get('/areas/buscar','obtenerDatos');
    Route:: put('/areas/actualizar','actualizarDatos');
    Route:: delete('/areas/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE CLASE DE VISITA
Route:: controller(ClaseDeVisitaController::class)->group(function(){
    Route:: post('/clasedevisitas/crear','crearDatos');
    Route:: get('/clasedevisitas/buscar','obtenerDatos');
    Route:: put('/clasedevisitas/actualizar','actualizarDatos');
    Route:: delete('/clasedevisitas/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE REGISTRO FINAL
Route:: controller(RegistroFinalController::class)->group(function(){
    Route:: post('/registrofinal/crear','crearDatos');
    Route:: get('/registrofinal/buscar','obtenerDatos');
    Route:: put('/registrofinal/actualizar','actualizarDatos');
    Route:: delete('/registrofinal/eliminar','eliminarDatos');
});