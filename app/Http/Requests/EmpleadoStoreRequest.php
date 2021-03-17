<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoStoreRequest extends FormRequest
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
            'id_legajo' => 'required|unique:empleados',
            'apellido' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
            'localidad' => 'required',
            'nro_documento' => 'required',
            'codigo_postal' => 'required',
        ];
    }
}
