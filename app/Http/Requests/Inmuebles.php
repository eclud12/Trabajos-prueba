<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Inmuebles extends FormRequest
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
            'casa'=>'required',
            'departamento'=>'required',
            'oficina'=>'required',
            'terreno'=>'required',
            'idestado'=>'required',
            'idmunicipio'=>'required'
        ];
    }
}
