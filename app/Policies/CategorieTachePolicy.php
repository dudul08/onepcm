<?php

namespace App\Policies;

use App\CategorieTache;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategorieTachePolicy
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
     * Determine whether the user can view any categorie taches.
     *
     * @param \App\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the categorie tache.
     *
     * @param \App\User $user
     * @param \App\CategorieTache $categorieTache
     * @return mixed
     */
    public function view(User $user, CategorieTache $categorieTache)
    {
        //
    }

    /**
     * Determine whether the user can create categorie taches.
     *
     * @param \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the categorie tache.
     *
     * @param \App\User $user
     * @param \App\CategorieTache $categorieTache
     * @return mixed
     */
    public function update(User $user, CategorieTache $categorieTache)
    {
        //
    }

    /**
     * Determine whether the user can delete the categorie tache.
     *
     * @param \App\User $user
     * @param \App\CategorieTache $categorieTache
     * @return mixed
     */
    public function delete(User $user, CategorieTache $categorieTache)
    {
        //
    }

    /**
     * Determine whether the user can restore the categorie tache.
     *
     * @param \App\User $user
     * @param \App\CategorieTache $categorieTache
     * @return mixed
     */
    public function restore(User $user, CategorieTache $categorieTache)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the categorie tache.
     *
     * @param \App\User $user
     * @param \App\CategorieTache $categorieTache
     * @return mixed
     */
    public function forceDelete(User $user, CategorieTache $categorieTache)
    {
        //
    }
}
