<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $administrador= Administrador::create([
            "tipo_documento_id"=>$request->tipo_documento_id,
            "datos_personales_id"=>$request->datos_personales_id,
            "credencial_id"=>$request->credencial_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data' => $administrador,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $administrador= Administrador::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data' => $administrador,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $administrador= Administrador::findOrFail($request->id);
        $administrador->update([
            "tipo_documento_id"=>$request->tipo_documento_id,
            "datos_personales_id"=>$request->datos_personales_id,
            "credencial_id"=>$request->credencial_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $administrador= Administrador::findOrFail($request->id);
        $administrador->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
