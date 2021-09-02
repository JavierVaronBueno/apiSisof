<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vehiculoPropietarioCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'propietario' => 'integer|required',
            'vehiculo' =>'integer|required',
        ];
    }
    public function messages()
    {
        return [
            'propietario.required' => 'El id del propietario es requerido',
            'propietario.integer' => 'El id del propierario debe ser un entero sin puntos y sin caracteres especiales.',
            'vehiculo.required' => 'El id del vehiculo es requerido',
            'vehiculo.integer' => 'El id del vehiculo debe ser un entero sin puntos y sin caracteres especiales.',
        ];
    }
}
