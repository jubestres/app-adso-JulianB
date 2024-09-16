<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barrio;

class BarrioController extends Controller
{
    public function save(Request $request)
    {
        $Barrio = Barrio::create([
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
        $Barrio=Barrio::findorfail($request->id);
        $Barrio->update([
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
        $Barrio=Barrio::All();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $Barrio=Barrio::findorfail($request->id);
        $Barrio->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}