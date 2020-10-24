<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    //
    public $fillable = [
        'idestado',
        'municipio'
    ];

    public static function validationRules(){
        return[
            'idestado' =>'nullable | min:5 |max:50',
            'municipio'  =>'requeried| min:5 |max:50',
        ];
    }
}
