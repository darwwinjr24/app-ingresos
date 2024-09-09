<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Credencial;

class CredencialController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $credencial= Credencial::create([
            "contraseña"=>$request->contraseña,
            "usuario"=>$request->usuario,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data'=> $credencial
        ]);
    }

    public function obtenerDatos(Request $request ){

        $credencial= Credencial::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data'=> $credencial
        ]);
    }

    public function actualizarDatos(Request $request ){

        $credencial= Credencial::findOrFail($request->id);
        $credencial->update([
            'contraseña'=>$request->contraseña,
            'usuario'=>$request->usuario,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $credencial= Credencial::findOrFail($request->id);
        $credencial->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
