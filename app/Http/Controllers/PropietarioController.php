<?php

namespace App\Http\Controllers;

use App\Http\Requests\propietarioCreateRequest;
use App\Http\Requests\propietarioEditeRequest;
use App\Models\sisof_Propietario;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietarios = sisof_Propietario::all();
        return $propietarios;
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
    public function store(propietarioCreateRequest $request)
    {
        $propietario = new sisof_Propietario();
        $propietario->cedula = $request->cedula;
        $propietario->nombres = $request->nombres;
        $propietario->apellidos = $request->apellidos;

        $propietario->save();
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
    public function update(propietarioEditeRequest $request)
    {
        $propietario = sisof_Propietario::findOrFail($request->id);
        $propietario->cedula = $request->cedula;
        $propietario->nombres = $request->nombres;
        $propietario->apellidos = $request->apellidos;

        $propietario->save();
        return $propietario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $propietario = sisof_Propietario::destroy($request->id);
        return $propietario;
    }
}
