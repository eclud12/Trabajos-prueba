<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmuebles extends Model
{
    //
    public $fillable = [
        'idestado',
        'idmunicipio',
        'casa',
        'departamento',
        'oficina',
        'terreno'
    ];

    public static function validationRules(){
        return[
            'idestado' =>'nullable | min:5 |max:50',
            'idmunicipio'  =>'nullable| min:5 |max:50',
            'casa'  =>'requeried| min:5 |max:50',
            'departamento'  =>'requeried| min:5 |max:50',
            'oficina'  =>'requeried| min:5 |max:50',
            'terreno' =>'requeried| min:1 |max:32',
        ];
    }
}
