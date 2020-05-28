<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    // Este before lo que hace es dejar editar a otros usuarios
    // siempre y cuando sea de role admin en caso de ser asi 
    // Si la funcion retorna falso dejara que los dejams metodos corran
    // y por ende bloqueara el acceso
    public function before($user, $ability)
    {
        if($user->hasRoles('admin')){
            return true;
        }
    }

    public function edit(User $authUser,User $user)
    {
        return $authUser->id ===$user->id;
    }

    public function update(User $authUser,User $user)
    {
        return $authUser->id ===$user->id;
    }
}
