<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;


class CargoController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $cargo= Cargo::create([
            "nombre"=>$request->nombre,
        ]);    

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de cargos guardados con exito',
        'data' => $cargo,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $cargo= Cargo::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de cargos encontrados',
        'data' => $cargo,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $cargo= Cargo::findOrFail($request->id);
        $cargo->update([
            'nombre'=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de cargos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $cargo= Cargo::findOrFail($request->id);
        $cargo->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de cargos eliminnados con exito',
        ]);
    }
}
