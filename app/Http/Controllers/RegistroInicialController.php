<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_inicial;

class RegistroInicialController extends Controller
{
    //

    
    public function crearDatos(Request $request ){

        $registroInicial= Registro_inicial::create([
            "fecha_inicio"=>$request->fecha_inicio,
            "hora_inicio"=>$request->hora_inicio,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data'=> $registroInicial,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $registroInicial= Registro_inicial::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data'=> $registroInicial,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $registroInicial= Registro_inicial::findOrFail($request->id);
        $registroInicial->update([
            'fecha_inicio'=>$request->fecha_inicio,
            'hora_inicio'=>$request->hora_inicio,
        ]);
        
        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $registroInicial= Registro_inicial::findOrFail($request->id);
        $registroInicial->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
