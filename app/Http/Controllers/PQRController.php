<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PQR;

class PQRController extends Controller
{
    public function save(Request $request)
    {
        $PQR = PQR::create([
            "Fecha_radicacion" => $request->Fecha_radicacion,
            "Descripcion" => $request->Descripcion,
            "id_clientes" => $request->id_clientes,
            "id_tipo_solicituds" => $request->id_tipo_solicituds,
        ]);


        return response()->json([
            "status" => "200",
            "message" => "User created successfully",
        ]);
    }

    public function update(Request $request)
    {
        $PQR=PQR::findorfail($request->id);
        $PQR->update([
           "Fecha_radicacion" => $request->Fecha_radicacion,
            "Descripcion" => $request->Descripcion,
            "id_clientes" => $request->id_clientes,
            "id_tipo_solicituds" => $request->id_tipo_solicituds,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function get(Request $request)
    {
        //al usar with se indica que hay una relacion para que el haga un inner join osea traga los datos de la realcion
        $PQR=PQR::with('cliente')->get();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
            "result"=> $PQR
        ]);
    }

    public function delete(Request $request)
    {
        $PQR=PQR::findorfail($request->id);
        $PQR->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}
