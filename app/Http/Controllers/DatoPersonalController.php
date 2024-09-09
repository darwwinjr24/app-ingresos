<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dato_personal;

class DatoPersonalController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $datosPersonales= Dato_personal::create([
            "nombres"=>$request->nombres,
            "apellidos"=>$request->apellidos,
            "numero_documento"=>$request->numero_documento,
            "celular"=>$request->celular,
            "correo"=>$request->correo,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data' => $datosPersonales
        ]);
    }

    public function obtenerDatos(Request $request ){

        $datosPersonales= Dato_personal::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data' => $datosPersonales
        ]);
    }

    public function actualizarDatos(Request $request ){

        $datosPersonales= Dato_personal::findOrFail($request->id);
        $datosPersonales->update([
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'numero_documento'=>$request->numero_documento,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $datosPersonales= Dato_personal::findOrFail($request->id);
        $datosPersonales->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
