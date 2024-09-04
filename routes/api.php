<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AreaAVisitarController;
use App\Http\Controllers\ClaseDeVisitaController;
use App\Http\Controllers\RegistroFinalController;
use App\Http\Controllers\RegistroInicialController;
use App\Http\Controllers\DatoPersonalController;
use App\Http\Controllers\CredencialController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\AutorizadoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\RegistroVisitaRecibidaController;


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

// RUTAS EN GRUPO DE REGISTRO INICIAL
Route:: controller(RegistroInicialController::class)->group(function(){
    Route:: post('/registroinicial/crear','crearDatos');
    Route:: get('/registroinicial/buscar','obtenerDatos');
    Route:: put('/registroinicial/actualizar','actualizarDatos');
    Route:: delete('/registroinicial/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE DATOS PERSONALES
Route:: controller(DatoPersonalController::class)->group(function(){
    Route:: post('/datospersonales/crear','crearDatos');
    Route:: get('/datospersonales/buscar','obtenerDatos');
    Route:: put('/datospersonales/actualizar','actualizarDatos');
    Route:: delete('/datospersonales/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE CREDENCIALES
Route:: controller(CredencialController::class)->group(function(){
    Route:: post('/credenciales/crear','crearDatos');
    Route:: get('/credenciales/buscar','obtenerDatos');
    Route:: put('/credenciales/actualizar','actualizarDatos');
    Route:: delete('/credenciales/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE TIPO DE DOCUMENTO
Route:: controller(TipoDocumentoController::class)->group(function(){
    Route:: post('/tipodocumento/crear','crearDatos');
    Route:: get('/tipodocumento/buscar','obtenerDatos');
    Route:: put('/tipodocumento/actualizar','actualizarDatos');
    Route:: delete('/tipodocumento/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE AUTORIZADOS
Route:: controller(AutorizadoController::class)->group(function(){
    Route:: post('/autorizaciones/crear','crearDatos');
    Route:: get('/autorizaciones/buscar','obtenerDatos');
    Route:: put('/autorizaciones/actualizar','actualizarDatos');
    Route:: delete('/autorizaciones/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE USUARIOS
Route:: controller(UsuarioController::class)->group(function(){
    Route:: post('/usuarios/crear','crearDatos');
    Route:: get('/usuarios/buscar','obtenerDatos');
    Route:: put('/usuarios/actualizar','actualizarDatos');
    Route:: delete('/usuarios/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE CARGOS
Route:: controller(CargoController::class)->group(function(){
    Route:: post('/cargos/crear','crearDatos');
    Route:: get('/cargos/buscar','obtenerDatos');
    Route:: put('/cargos/actualizar','actualizarDatos');
    Route:: delete('/cargos/eliminar','eliminarDatos');
});

// RUTAS EN GRUPO DE REGISTRO DE VISITAS RECIBIDAS
Route:: controller(RegistroVisitaRecibidaController::class)->group(function(){
    Route:: post('/registrosvisitas/crear','crearDatos');
    Route:: get('/registrosvisitas/buscar','obtenerDatos');
    Route:: put('/registrosvisitas/actualizar','actualizarDatos');
    Route:: delete('/registrosvisitas/eliminar','eliminarDatos');
});