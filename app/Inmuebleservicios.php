<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmuebleservicios extends Model
{
    //
    public $fillable = [
        'idinmueble',
        'idservicio'
    ];
    
    public static function validationRules(){
        return[
            'idinmueble' =>'nullable | min:5 |max:50',
            'idservicio'  =>'nullable| min:5 |max:50',
        ];
    }
}
