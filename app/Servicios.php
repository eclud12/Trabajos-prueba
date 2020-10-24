<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //
    public $fillable = [
        'agua_potable',
        'telefonia',
        'internet',
        'energia_electrica',
        'gas'
    ];

    public static function validationRules(){
        return[
            'agua_potable' =>'requeried | min:5 |max:50',
            'telefonia'  =>'requeried| min:5 |max:50',
            'internet'  =>'requeried| min:5 |max:50',
            'energia_electrica'  =>'requeried| min:5 |max:50',
            'gas'  =>'requeried| min:5 |max:50',
        ];
    }
}
