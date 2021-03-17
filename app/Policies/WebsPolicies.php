<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Webs;
use Illuminate\Auth\Access\HandlesAuthorization;

class WebsPolicies
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Webs  $webs
     * @return mixed
     */
    public function view(User $user, Webs $webs)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Webs  $webs
     * @return mixed
     */
    public function update(User $user, Webs $webs)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Webs  $webs
     * @return mixed
     */
    public function delete(User $user, Webs $webs)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Webs  $webs
     * @return mixed
     */
    public function restore(User $user, Webs $webs)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Webs  $webs
     * @return mixed
     */
    public function forceDelete(User $user, Webs $webs)
    {
        //
    }
}
