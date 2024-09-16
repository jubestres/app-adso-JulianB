<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AreaRespuesta;

class AreaRespuestaController extends Controller
{
    public function save(Request $request)
    {

        $AreaRespuesta = AreaRespuesta::create([
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
        $AreaRespuesta=AreaRespuesta::findorfail($request->id);
        $AreaRespuesta->update([
            "nombre"=>$request->nombre,
            "codigo" =>$request->codigo,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function get(Request $request)
    {
        $AreaRespuesta=AreaRespuesta::All();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $AreaRespuesta=AreaRespuesta::findorfail($request->id);
        $AreaRespuesta->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}
