<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{

    public function index()
    {
        return response()->json(Destino::with([
            'tours'
        ])->get());
    }

    public function top()
    {
        return response()->json(Destino::take(10)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Destino::create([
            "pais" => $request->pais,
            "descripcion" => $request->descripcion,
            "img_fondo" => "https://via.placeholder.com/899x594",
            "img_bandera" => "https://via.placeholder.com/61x62",
        ]);
        return response()->json(["status" => 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        Destino::where('id', $request->id)->update([
            "pais" => $request->pais,
            "descripcion" => $request->descripcion,
        ]);
        return response()->json(["status" => 200]);
    }

    public function destroy(Request $request)
    {
        $destino = Destino::find($request->id);
        $destino->delete();
        return response()->json(["status" => 200]);
    }
}
