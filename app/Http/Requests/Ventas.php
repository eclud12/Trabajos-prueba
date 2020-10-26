<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ventas extends FormRequest
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
            'idusers'=>'required',
            'idinmueble'=>'required',
            'tipo_inmueble'=>'required',
            'total_de_venta'=>'required',
            'forma_De_pago'=>'required'
        ];
    }
}
