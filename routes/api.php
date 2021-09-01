<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/vehiculos', 'App\Http\Controllers\VehiculoController@index');//Mostrar todos los vehiculos
Route::post('/vehiculos', 'App\Http\Controllers\VehiculoController@store');//Crear registro vehiculo
Route::put('/vehiculos/{id}', 'App\Http\Controllers\VehiculoController@update');//Actualizar registro vehiculo
Route::delete('/vehiculos/{id}', 'App\Http\Controllers\VehiculoController@destroy');//Eliminar un registro vehiculo

Route::get('/propietarios', 'App\Http\Controllers\PropietarioController@index');//Mostrar todos los Propietario
Route::post('/propietarios', 'App\Http\Controllers\PropietarioController@store');//Crear registro Propietario
Route::put('/propietarios/{id}', 'App\Http\Controllers\PropietarioController@update');//Actualizar registro Propietario
Route::delete('/propietarios/{id}', 'App\Http\Controllers\PropietarioController@destroy');//Eliminar un registro Propietario

Route::get('/vehiculosPropietarios', 'App\Http\Controllers\VehiculoPropietarioController@index');//Mostrar todos los vehiculos de Propietario
Route::post('/vehiculosPropietarios', 'App\Http\Controllers\VehiculoPropietarioController@store');//Crear registro vehiculos de Propietario
Route::put('/vehiculosPropietarios/{id}', 'App\Http\Controllers\VehiculoPropietarioController@update');//Actualizar registro vehiculos y Propietario
Route::delete('/vehiculosPropietarios/{id}', 'App\Http\Controllers\VehiculoPropietarioController@destroy');//Eliminar un registro vehiculos y Propietario