<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class propietarioEditeRequest extends FormRequest
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
        $propietario = $this->route('propietarios/{id}');
        return [
            'cedula'=>[
                'integer',
                'unique:sisof__propietarios',
                'required',
                'min:10'
            ],
            'nombres'=>'string|required',
            'apellidos'=>'string|required',
        ];
    }

    public function messages()
    {
        return [
            'cedula.required' => 'La cedula es requerida',
            'cedula.integer' => 'La cedula debe ser un entero sin puntos y sin caracteres especiales.',
            'cedula.unique' => 'La cedula ya existe.',
            'cedula.min' => 'La cedula debe tener un tamaño minimo de 10 caracteres',
            'nombres.string' => 'Los nombres debe ser una cadena de caracteres.',
            'nombres.required' => 'Los nombres son requeridos',
            'apellidos.string' => 'Los apellidos debe ser una cadena de caracteres.',
            'apellidos.required' => 'Los apellidos son requeridos'
        ];
    }
}
