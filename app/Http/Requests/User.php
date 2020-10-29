<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
            //
            'nombre'=>'required',
            'primer_apellido'=>'required',
            'segundo_apellido'=>'required',
            'numero_celular'=>'required',
            'correo'=>'required',
            'correo_verified_at'=>'required',
            'contraseña'=>'required'
        ];
    }
}
