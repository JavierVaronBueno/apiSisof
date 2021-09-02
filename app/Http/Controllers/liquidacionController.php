<?php

namespace App\Http\Controllers;
use App\Models\sisof_Vehiculo;
use App\Models\sisof_Propietario;
use App\Models\sisof_VehiculoPropietario;

use Illuminate\Http\Request;

class liquidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($placa)
    {
        
        $vehiculos = sisof_Vehiculo::where('placa', $placa)->first();
        $vehiculosPropietarios = sisof_VehiculoPropietario::where('vehiculo', $vehiculos->id)->first();
        $propietarios = sisof_Propietario::where('id', $vehiculosPropietarios->propietario)->first();
        //dd($propietarios);
        
        $liquidacion=$vehiculos->precio*1.5;
        $data = [
            'success'=>true,
            'Liquidacion' => array(
                array(
                    'id_vehiculo'=>$vehiculos->id,
                    'placa'=>$vehiculos->placa,
                    'marca'=>$vehiculos->marca,
                    'linea'=>$vehiculos->linea,
                    'precio'=>$vehiculos->precio,
                    'liquidacion'=>$liquidacion,
                    'id_propietario'=>$propietarios->id,
                    'cedula'=>$propietarios->cedula,
                    'nombres'=>$propietarios->nombres,
                    'apellidos'=>$propietarios->apellidos
                    )  
            )
        ];
        return response()->json($data, 200, []);
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
