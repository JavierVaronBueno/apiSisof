<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sisof_Vehiculo;
use Dflydev\DotAccessData\Data;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = sisof_Vehiculo::all();
        return $vehiculos;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'placa'=>'string|unique|require',
            'marca'=>'string',
            'linea'=>'string',
            'precio'=>'integer',
        ]);

        $vehiculo = new sisof_Vehiculo();
        $vehiculo->placa = $request->placa;
        $vehiculo->marca = $request->marca;
        $vehiculo->linea = $request->linea;
        $vehiculo->precio = $request->precio;

        $vehiculo->save();
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $vehiculo = sisof_Vehiculo::findOrFail($request->id);
        $vehiculo->placa = $request->placa;
        $vehiculo->marca = $request->marca;
        $vehiculo->linea = $request->linea;
        $vehiculo->precio = $request->precio;

        $vehiculo->save();
        return $vehiculo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $vehiculo = sisof_Vehiculo::destroy($request->id);
        return $vehiculo;
    }
}
