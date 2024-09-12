<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;


class EmpleadoController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $empelados= Empleado::create([
            "cargo_id"=>$request->cargo_id,
            "tipo_documento_id"=>$request->tipo_documento_id,
            "datos_personales_id"=>$request->datos_personales_id,
            "visitante_id"=>$request->visitante_id,
        ]);
        
        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado guardados con exito',
        'data' => $empelados
        ]);
    }

    public function obtenerDatos(Request $request ){

        $empelados= Empleado::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado encontrados',
        'data' => $empelados
        ]);
    }

    public function actualizarDatos(Request $request ){

        $empelados= Empleado::findOrFail($request->id);
        $empelados->update([
            "cargo_id"=>$request->cargo_id,
            "tipo_documento_id"=>$request->tipo_documento_id,
            "datos_personales_id"=>$request->datos_personales_id,
            "visitante_id"=>$request->visitante_id,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $empelados= Empleado::findOrFail($request->id);
        $empelados->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos de empleado eliminnados con exito',
        ]);
    }
}
