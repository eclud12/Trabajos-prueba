<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    Use SoftDeletes;
    protected $table = 'municipios';

    public function Municipios()
    {
        return $this->hasOne(Municipios::class);
    }

}
