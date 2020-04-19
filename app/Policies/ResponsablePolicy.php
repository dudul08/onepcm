<?php

namespace App\Policies;

use App\Responsable;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResponsablePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        return User::isAdmin($user);
    }
    public function viewLink($user)
    {
        return User::isAdmin($user);
    }
    /**
     * Determine whether the user can view any responsables.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the responsable.
     *
     * @param  \App\User  $user
     * @param  \App\Responsable  $responsable
     * @return mixed
     */
    public function view(User $user, Responsable $responsable)
    {
        //
    }

    /**
     * Determine whether the user can create responsables.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the responsable.
     *
     * @param  \App\User  $user
     * @param  \App\Responsable  $responsable
     * @return mixed
     */
    public function update(User $user, Responsable $responsable)
    {
        //
    }

    /**
     * Determine whether the user can delete the responsable.
     *
     * @param  \App\User  $user
     * @param  \App\Responsable  $responsable
     * @return mixed
     */
    public function delete(User $user, Responsable $responsable)
    {
        //
    }

    /**
     * Determine whether the user can restore the responsable.
     *
     * @param  \App\User  $user
     * @param  \App\Responsable  $responsable
     * @return mixed
     */
    public function restore(User $user, Responsable $responsable)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the responsable.
     *
     * @param  \App\User  $user
     * @param  \App\Responsable  $responsable
     * @return mixed
     */
    public function forceDelete(User $user, Responsable $responsable)
    {
        //
    }
}
