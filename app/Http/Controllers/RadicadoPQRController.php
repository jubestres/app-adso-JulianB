<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RadicadoPQR;

class RadicadoPQRController extends Controller
{
    public function save(Request $request)
    {
        $RadicadoPQR = RadicadoPQR::create([
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
        $RadicadoPQR=RadicadoPQR::findorfail($request->id);
        $RadicadoPQR->update([
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
        $RadicadoPQR=RadicadoPQR::All();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $RadicadoPQR=RadicadoPQR::findorfail($request->id);
        $RadicadoPQR->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}