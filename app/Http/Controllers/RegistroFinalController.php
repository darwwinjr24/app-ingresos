<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_final;


class RegistroFinalController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $registroFinal= Registro_final::create([
            "fecha_fin"=>$request->fecha_fin,
            "hora_fin"=>$request->hora_fin,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data'=> $registroFinal,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $registroFinal= Registro_final::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data'=> $registroFinal,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $registroFinal= Registro_final::findOrFail($request->id);
        $registroFinal->update([
            'fecha_fin'=>$request->fecha_fin,
            'hora_fin'=>$request->hora_fin,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $registroFinal= Registro_final::findOrFail($request->id);
        $registroFinal->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
