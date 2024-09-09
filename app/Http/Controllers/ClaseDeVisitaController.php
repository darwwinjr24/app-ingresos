<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clase_de_visita;

class ClaseDeVisitaController extends Controller
{
    //
    public function crearDatos(Request $request ){

    $claseVisitas= Clase_de_visita::create([
        "nombre"=>$request->nombre,
    ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data' => $claseVisitas,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $claseVisitas= Clase_de_visita::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data'=> $claseVisitas
        ]);
    }

    public function actualizarDatos(Request $request ){

        $claseVisitas= Clase_de_visita::findOrFail($request->id);
        $claseVisitas->update([
            'nombre'=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){
        
        $claseVisitas= Clase_de_visita::findOrFail($request->id);
        $claseVisitas->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
