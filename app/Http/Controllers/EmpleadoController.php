<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //

    public function crearDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado guardados con exito',
        ]);
    }

    public function obtenerDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado encontrados',
        ]);
    }

    public function actualizarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado eliminnados con exito',
        ]);
    }
}
