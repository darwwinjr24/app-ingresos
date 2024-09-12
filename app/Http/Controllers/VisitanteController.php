<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitante;

class VisitanteController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $visitantes= Visitante::create([
            "foto"=>$request->foto,
            "empresa"=>$request->empresa,
            "tipo_documento_id"=>$request->tipo_documento_id,
            "autorizado_id"=>$request->autorizado_id,
            "datos_personales_id"=>$request->datos_personales_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante guardados con exito',
        'data' => $visitantes,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $visitantes= Visitante::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante encontrados',
        'data' => $visitantes,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $visitantes= Visitante::findOrFail($request->id);
        $visitantes->update([
            "foto"=>$request->foto,
            "empresa"=>$request->empresa,
            "tipo_documento_id"=>$request->tipo_documento_id,
            "autorizado_id"=>$request->autorizado_id,
            "datos_personales_id"=>$request->datos_personales_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $visitantes= Visitante::findOrFail($request->id);
        $visitantes->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitante eliminnados con exito',
        ]);
    }
}
