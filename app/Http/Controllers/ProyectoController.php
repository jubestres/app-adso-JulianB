<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function save(Request $request)
    {

        $Proyecto = Proyecto::create([
            "nombre" => $request->nombre,
            "Codigo" => $request->Codigo,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "User created successfully",
        ]);
    }

    public function update(Request $request)
    {
        $Proyecto=Proyecto::findorfail($request->id);
        $Proyecto->update([
            "nombre" => $request->nombre,
            "Codigo" => $request->Codigo,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function get(Request $request)
    {
        $Proyecto=Proyecto::All();
        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $Proyecto=Proyecto::findorfail($request->id);
        $Proyecto->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}