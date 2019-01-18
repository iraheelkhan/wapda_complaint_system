<?php

namespace App\Policies;

use App\User;
use App\Complaint;
use App\Policies\ComplaintPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComplaintPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the complaint.
     *
     * @param  \App\User  $user
     * @param  \App\Complaint  $complaint
     * @return mixed
     */
    public function view(User $user, Complaint $complaint)
    {
        //
        return $user->id === $complaint->user_id;
    }

    /**
     * Determine whether the user can create complaints.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the complaint.
     *
     * @param  \App\User  $user
     * @param  \App\Complaint  $complaint
     * @return mixed
     */
    public function update(User $user, Complaint $complaint)
    {
        //
    }

    /**
     * Determine whether the user can delete the complaint.
     *
     * @param  \App\User  $user
     * @param  \App\Complaint  $complaint
     * @return mixed
     */
    public function delete(User $user, Complaint $complaint)
    {
        //
    }
}
