<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatoPersonalController extends Controller
{
    //

    public function crearDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        ]);
    }

    public function obtenerDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        ]);
    }

    public function actualizarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
