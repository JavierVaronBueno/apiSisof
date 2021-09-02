<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vehiculoCreateRequest extends FormRequest
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
            'placa'=>'string|unique:sisof__vehiculos|required|max:6',
            'marca'=>'string|required',
            'linea'=>'string|required',
            'precio'=>'integer|required',
        ];

    }

    public function messages()
    {
        return [
            'placa.required' => 'La placa es requerida',
            'placa.string' => 'La placa debe ser una cadena de caracteres.',
            'placa.unique' => 'La placa ya existe.',
            'placa.max' => 'La placa debe tener un tamaño de 6 caracteres',
            'marca.string' => 'La marca debe ser una cadena de caracteres.',
            'marca.required' => 'La marca es requerida',
            'linea.string' => 'La linea debe ser una cadena de caracteres.',
            'linea.required' => 'La linea es requerida',
            'precio.integer' => 'La precio debe ser un Entero.',
            'precio.required' => 'La precio es requerido'
        ];
    }
}
