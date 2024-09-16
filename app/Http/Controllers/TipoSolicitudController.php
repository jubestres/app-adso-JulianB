<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoSolicitud;

class TipoSolicitudController extends Controller
{
    public function save(Request $request)
    {
        $TipoSolicitud = TipoSolicitud::create([
            "nombre" => $request->nombre,
            "codigo" => $request->codigo,
        ]);


        return response()->json([
            "status" => "200",
            "message" => "User created successfully",
        ]);
    }

    public function update(Request $request)
    {
        $TipoSolicitud=TipoSolicitud::findorfail($request->id);
        $TipoSolicitud->update([
            "nombre" => $request->nombre,
            "codigo" => $request->codigo,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function get(Request $request)
    {
        $TipoSolicitud=TipoSolicitud::All();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $TipoSolicitud=TipoSolicitud::findorfail($request->id);
        $TipoSolicitud->delete();
        
        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}