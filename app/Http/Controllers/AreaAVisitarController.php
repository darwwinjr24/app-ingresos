<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area_a_visitar;

class AreaAVisitarController extends Controller
{
    //
    public function crearDatos(Request $request ){

        $areaVisitar= Area_a_visitar::create([
            "nombre"=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data' => $areaVisitar,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $areaVisitar= Area_a_visitar::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data' => $areaVisitar,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $areaVisitar= Area_a_visitar::findOrFail($request->id);
        $areaVisitar->update([
            'nombre'=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $areaVisitar= Area_a_visitar::findOrFail($request->id);
        $areaVisitar->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
