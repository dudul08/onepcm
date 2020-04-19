<?php

namespace App\Policies;

use App\Enfant;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnfantPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        return User::isAdmin($user);
    }
    public function viewLink($user){
        return User::isAdmin($user);
    }
    /**
     * Determine whether the user can view any enfants.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the enfant.
     *
     * @param  \App\User  $user
     * @param  \App\Enfant  $enfant
     * @return mixed
     */
    public function view(User $user, Enfant $enfant)
    {
        //
    }

    /**
     * Determine whether the user can create enfants.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the enfant.
     *
     * @param  \App\User  $user
     * @param  \App\Enfant  $enfant
     * @return mixed
     */
    public function update(User $user, Enfant $enfant)
    {
        //
    }

    /**
     * Determine whether the user can delete the enfant.
     *
     * @param  \App\User  $user
     * @param  \App\Enfant  $enfant
     * @return mixed
     */
    public function delete(User $user, Enfant $enfant)
    {
        //
    }

    /**
     * Determine whether the user can restore the enfant.
     *
     * @param  \App\User  $user
     * @param  \App\Enfant  $enfant
     * @return mixed
     */
    public function restore(User $user, Enfant $enfant)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the enfant.
     *
     * @param  \App\User  $user
     * @param  \App\Enfant  $enfant
     * @return mixed
     */
    public function forceDelete(User $user, Enfant $enfant)
    {
        //
    }
}
