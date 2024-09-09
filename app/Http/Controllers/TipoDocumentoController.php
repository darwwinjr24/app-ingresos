<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_documento;


class TipoDocumentoController extends Controller
{
    //

    public function crearDatos(Request $request ){

        $tipoDocumento= Tipo_documento::create([
            "nombre"=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos guardados con exito',
        'data' => $tipoDocumento,
        ]);
    }

    public function obtenerDatos(Request $request ){

        $tipoDocumento= Tipo_documento::all();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos encontrados',
        'data' => $tipoDocumento,
        ]);
    }

    public function actualizarDatos(Request $request ){

        $tipoDocumento= Tipo_documento::findOrFail($request->id);
        $tipoDocumento->update([
            'nombre'=>$request->nombre,
        ]);

        return response()->json([
        'status' =>'200',
        'message' => 'Datos actualizados correctamente',
        ]);
    }

    public function eliminarDatos(Request $request ){

        $tipoDocumento= Tipo_documento::findOrFail($request->id);
        $tipoDocumento->delete();

        return response()->json([
        'status' =>'200',
        'message' => 'Datos eliminnados con exito',
        ]);
    }
}
