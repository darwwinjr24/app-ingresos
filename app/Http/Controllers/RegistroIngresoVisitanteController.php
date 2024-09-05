<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistroIngresoVisitanteController extends Controller
{
    //

    public function crearDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso guardados con exito',
        ]);
    }

    public function obtenerDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso encontrados',
        ]);
    }

    public function actualizarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso eliminnados con exito',
        ]);
    }
}
