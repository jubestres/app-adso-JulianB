<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RespuestaPQR;

class RespuestaPQRController extends Controller
{
    public function save(Request $request)
    {
        $RespuestaPQR = RespuestaPQR::create([
            "respuestacliente" => $request->respuestacliente,
            "id_clientes" => $request->id_clientes,
            "id_radicado_p_q_r_s" => $request->id_radicado_p_q_r_s,
            "id_area_respuestas" => $request->id_area_respuestas,
        ]);


        return response()->json([
            "status" => "200",
            "message" => "User created successfully",
        ]);
    }

    public function update(Request $request)
    {
        $RespuestaPQR=RespuestaPQR::findorfail($request->id);
        $RespuestaPQR->update([
            "respuestacliente" => $request->respuestacliente,
            "id_clientes" => $request->id_clientes,
            "id_radicado_p_q_r_s" => $request->id_radicado_p_q_r_s,
            "id_area_respuestas" => $request->id_area_respuestas,
        ]);


        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function get(Request $request)
    {

        $RespuestaPQR=RespuestaPQR::All();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $RespuestaPQR=RespuestaPQR::findorfail($request->id);
        $RespuestaPQR->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}