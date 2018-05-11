<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InteresadoRequest extends FormRequest
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
            'nombre' => 'min:4|max:32|required',
            'apellido' => 'min:4|max:32|required',
            'telefono' => 'min:9|max:11|required',
            'slcLocalidad' => 'required',
            'slcBarrios' => 'required',
                                                    //Tabla la cual debe ser unico
            'email' => 'min:4|max:32|required|unique:interesados'
        ];
    }
}
