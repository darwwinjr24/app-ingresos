<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Autorizado;


class AutorizadoController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $autorizado= Autorizado::create([
            "nombre"=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de autorizaciones guardados con exito',
        'data' => $autorizado,

        ]);
    }

    public function obtenerDatos(Request $request ){

        $autorizado= Autorizado::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de autorizacion encontrados',
        'data' => $autorizado,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $autorizado= Autorizado::findOrFail($request->id);
        $autorizado->update([
            'nombre'=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de autorizaciones actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $autorizado= Autorizado::findOrFail($request->id);
        $autorizado->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de autorizaciones eliminnados con exito',
        ]);
    }
}
