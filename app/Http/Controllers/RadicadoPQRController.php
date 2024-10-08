<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RadicadoPQRController extends Controller
{
    public function save(Request $request)
    {
        return response()->json([
            "status" => "200",
            "message" => "User created successfully",
        ]);
    }

    public function update(Request $request)
    {
        return response()->json([
            "status" => "200",
            "message" => "Update successfully",
        ]);
    }

    public function getdata(Request $request)
    {
        return response()->json([
            "status" => "200",
            "message" => "Get data successfully",
        ]);
    }

    public function delete(Request $request)
    {
        return response()->json([
            "status" => "200",
            "message" => "Delete successfully",
        ]);
    }
}