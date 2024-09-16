<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function save(Request $request)
    {
       
        $cliente = Cliente::create([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
            "cedula" => $request->cedula,
            "telefono" => $request->telefono,
            "correo" => $request->correo,
            "radicado" => $request->radicado,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "User created successfully",
            "data" => $cliente, 
        ]);
    }

    public function update(Request $request)
    {
        $Cliente=Cliente::findorfail($request->id);
        $Cliente->update([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
            "cedula" => $request->cedula,
            "telefono" => $request->telefono,
            "correo" => $request->correo,
            "radicado" => $request->radicado,
        ]);

        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function get(Request $request)
    {
        $Cliente=Cliente::All();

        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        $Cliente=Cliente::findorfail($request->id);
        $Cliente->delete();

        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}
