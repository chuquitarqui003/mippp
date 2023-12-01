<?php

namespace App\Http\Controllers;

use App\Models\Matery;
use Illuminate\Http\Request;

class MateryController extends Controller
{
    public function index()
    {
        //que me duelva todos los post si pongo "all"
        $materys = Matery::all();
        return response()->json($materys);
    }

    public function store(Request $request)
    {
        $matery = Matery::create($request->all());
        return response()->json([
            'mensage' => "articulo Insertado satisfactoriamente",
            'articulo' => $matery
        ], 200);
    }

    public function update(Request $request,  $matery)
    {
        $matery=Matery::find($matery);
        $matery->update($request->all());
        return response()->json([
            'mensage' => "M Editado satisfactoriamente",
            'articulo' => $matery
        ], 200);
    }

    public function destroy(Matery $matery)
    {
        $matery->delete();
        return response()->json([
            'mensage' => "articulo Eliminado satisfactoriamente",
            'articulo' => $matery
        ], 200);
    }


    //este es del profe
    public function show($matery){
        $matery=Matery::find($matery);
        return response()->json($matery);
    }
}
