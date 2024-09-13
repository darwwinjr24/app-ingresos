<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_visita_recibida;

class RegistroVisitaRecibidaController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $visitaRecibida= Registro_visita_recibida::create([
            "numero_visita"=>$request->numero_visita,
            "clase_visita_id"=>$request->clase_visita_id,
            "registro_inicio_id"=>$request->registro_inicio_id,
            "registro_fin_id"=>$request->registro_fin_id,
            "visitante_id"=>$request->visitante_id,
            "empleado_id"=>$request->empleado_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitas guardados con exito',
        'data' => $visitaRecibida,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $visitaRecibida= Registro_visita_recibida::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitas encontrados',
        'data' => $visitaRecibida,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $visitaRecibida= Registro_visita_recibida::findOrFail($request->id);
        $visitaRecibida->update([
            "numero_visita"=>$request->numero_visita,
            "clase_visita_id"=>$request->clase_visita_id,
            "registro_inicio_id"=>$request->registro_inicio_id,
            "registro_fin_id"=>$request->registro_fin_id,
            "visitante_id"=>$request->visitante_id,
            "empleado_id"=>$request->empleado_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitas actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $visitaRecibida= Registro_visita_recibida::findOrFail($request->id);
        $visitaRecibida->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de visitas eliminnados con exito',
        ]);
    }
}
