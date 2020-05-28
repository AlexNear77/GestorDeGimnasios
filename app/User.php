<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','role'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // Lo utilizamos para definir el tipo de usuario admin o empleado
    public function hasRoles($role){
        return $this->role === $role;
    }
    //hacemos la relacion de usuario ya sea empleado o admin con el gymnasio
    public function gyms(){ 
        return $this->belongsToMany(Gym::class,'assigned_gyms');// metemos como segundo parametro la tabla pivote ya que laravel no la encuetra pues no esta definida como usualmente laravel la busca
    }


}
