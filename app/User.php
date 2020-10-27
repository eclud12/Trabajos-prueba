<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nonmbre', 
        'primer_apellido',
        'segundo_apellido',
        'numero_celular',
        'correo', 
        'contraseña',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'correo_verified_at' => 'datetime',
    ];

    public static function validationRules(){
        return[
            'nombre' =>'requeried| min:5 |max:50',
            'primer_apellido'  =>'requeried| min:5 |max:50',
            'segundo_apellido'  =>'requeried| min:5 |max:50',
            'numero_celular'  =>'requeried| min:5 |max:50',
            'correo'  =>'requeried| min:5 |max:50',
            'contraseña' =>'requeried| interger | min:1 |max:32',
        ];
    }
     
    Use SoftDeletes;
    protected $table = 'User';

    public function User()
    {
        return $this->hasOne(User::class);
    }

}
