<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $rol= Rol::create([
            "nombre"=>$request->nombre,
            "autorizado_id"=>$request->autorizado_id,
            "usuario_id"=>$request->usuario_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol guardados con exito',
        'data' => $rol,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $rol= Rol::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol encontrados',
        'data' => $rol,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $rol= Rol::findOrFail($request->id);
        $rol->update([
            "nombre"=>$request->nombre,
            "autorizado_id"=>$request->autorizado_id,
            "usuario_id"=>$request->usuario_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $rol= Rol::findOrFail($request->id);
        $rol->delete();
        return response()->json([
        'status' =>'200',
        'message' => 'Datos de rol eliminnados con exito',
        ]);
    }
}
