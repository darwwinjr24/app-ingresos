<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_ingreso_visitante;

class RegistroIngresoVisitanteController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $ingresoVisitantes= Registro_ingreso_visitante::create([
            "visitante_id"=>$request->visitante_id,
            "registro_inicio_id"=>$request->registro_inicio_id,
            "registro_fin_id"=>$request->registro_fin_id,
            "area_a_visitar_id"=>$request->area_a_visitar_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso guardados con exito',
        'data' => $ingresoVisitantes
        ]);
    }

    public function obtenerDatos(Request $request ){

        $ingresoVisitantes= Registro_ingreso_visitante::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso encontrados',
        'data' => $ingresoVisitantes,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $ingresoVisitantes= Registro_ingreso_visitante::findOrFail($request->id);
        $ingresoVisitantes->update([
            "visitante_id"=>$request->visitante_id,
            "registro_inicio_id"=>$request->registro_inicio_id,
            "registro_fin_id"=>$request->registro_fin_id,
            "area_a_visitar_id"=>$request->area_a_visitar_id,
        ]);
        
        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $ingresoVisitantes= Registro_ingreso_visitante::findOrFail($request->id);
        $ingresoVisitantes->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de ingreso eliminnados con exito',
        ]);
    }
}
