<?php

namespace App\Policies;

use App\Tache;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TachePolicy
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
     * Determine whether the user can view any taches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the tache.
     *
     * @param  \App\User  $user
     * @param  \App\Tache  $tache
     * @return mixed
     */
    public function view(User $user, Tache $tache)
    {
        //
    }

    /**
     * Determine whether the user can create taches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tache.
     *
     * @param  \App\User  $user
     * @param  \App\Tache  $tache
     * @return mixed
     */
    public function update(User $user, Tache $tache)
    {
        //
    }

    /**
     * Determine whether the user can delete the tache.
     *
     * @param  \App\User  $user
     * @param  \App\Tache  $tache
     * @return mixed
     */
    public function delete(User $user, Tache $tache)
    {
        //
    }

    /**
     * Determine whether the user can restore the tache.
     *
     * @param  \App\User  $user
     * @param  \App\Tache  $tache
     * @return mixed
     */
    public function restore(User $user, Tache $tache)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tache.
     *
     * @param  \App\User  $user
     * @param  \App\Tache  $tache
     * @return mixed
     */
    public function forceDelete(User $user, Tache $tache)
    {
        //
    }
}
