<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    //

    public function crearDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante guardados con exito',
        ]);
    }

    public function obtenerDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante encontrados',
        ]);
    }

    public function actualizarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante eliminnados con exito',
        ]);
    }
}
