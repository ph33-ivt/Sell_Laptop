<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
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

    public function viewindex(User $user)
    {
        return $this->author($user,24);
    }
    public function updatestatus(User $user)
    {
        return $this->author($user,25);
    }

    public function author(User $user,$p_id)
    {
        foreach ($user->roles as $role ) {
            foreach ($role->permissions as $permission) {
                if($permission->id == $p_id)
                {
                    return true;
                }
            }
        }
        return false;
    }
}
