<?php

namespace App\Policies;

use App\User;
use App\Division;
use Illuminate\Auth\Access\HandlesAuthorization;

class DivisionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the division.
     *
     * @param  \App\User  $user
     * @param  \App\Division  $division
     * @return mixed
     */
    public function view(User $user, Division $division)
    {
        //
        return $user->role == "admin";
        
    }

    public function admin_only($user){
        if($user->role == 'admin'){
                return true;
            }
            else{
                return false;
            }
    }
    public function admin_only1($user){
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can create divisions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the division.
     *
     * @param  \App\User  $user
     * @param  \App\Division  $division
     * @return mixed
     */
    public function update(User $user, Division $division)
    {
        //
    }

    /**
     * Determine whether the user can delete the division.
     *
     * @param  \App\User  $user
     * @param  \App\Division  $division
     * @return mixed
     */
    public function delete(User $user, Division $division)
    {
        //
    }
}
