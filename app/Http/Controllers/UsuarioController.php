<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $usuarios= Usuario::create([
            "tipo_documento_id"=>$request->tipo_documento_id,
            "cargo_id"=>$request->cargo_id,
            "datos_personales_id"=>$request->datos_personales_id,
            "credencial_id"=>$request->credencial_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de usuarios guardados con exito',
        'data' => $usuarios
        ]);
    }

    public function obtenerDatos(Request $request ){

        $usuarios= Usuario::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de usuarios encontrados',
        'data' => $usuarios
        ]);
    }

    public function actualizarDatos(Request $request ){

        $usuarios= Usuario::findOrFail($request->id);
        $usuarios->update([
            "tipo_documento_id"=>$request->tipo_documento_id,
            "cargo_id"=>$request->cargo_id,
            "datos_personales_id"=>$request->datos_personales_id,
            "credencial_id"=>$request->credencial_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de usuarios actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $usuarios= Usuario::findOrFail($request->id);
        $usuarios->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de usuarios eliminnados con exito',
        ]);
    }
}
