<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //

    public function crearDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol guardados con exito',
        ]);
    }

    public function obtenerDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol encontrados',
        ]);
    }

    public function actualizarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol eliminnados con exito',
        ]);
    }
}
