<?php

namespace App\Http\Controllers;

use App\Http\Requests\vehiculoPropietarioCreateRequest;
use App\Http\Requests\vehiculoPropietarioEditeRequest;
use Illuminate\Http\Request;
use App\Models\sisof_VehiculoPropietario;

class VehiculoPropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculosPropietarios = sisof_VehiculoPropietario::all();
        return $vehiculosPropietarios;
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
    public function store(vehiculoPropietarioCreateRequest $request)
    {
        $vehiculoPropietario = new sisof_VehiculoPropietario();
        $vehiculoPropietario->propietario = $request->propietario;
        $vehiculoPropietario->vehiculo = $request->vehiculo;
        

        $vehiculoPropietario->save();
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
    public function update(vehiculoPropietarioEditeRequest $request)
    {
        $vehiculoPropietario = sisof_VehiculoPropietario::findOrFail($request->id);
        $vehiculoPropietario->propietario = $request->propietario;
        $vehiculoPropietario->vehiculo = $request->vehiculo;

        $vehiculoPropietario->save();
        return $vehiculoPropietario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $vehiculoPropietario = sisof_VehiculoPropietario::destroy($request->id);
        return $vehiculoPropietario;
    }
}
