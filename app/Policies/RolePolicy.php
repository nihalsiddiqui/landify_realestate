<?php

namespace App\Policies;

use App\Models\admin;
use App\Models\role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\User  $user
     * @param  \App\role  $role
     * @return mixed
     */
    public function view(admin $user)
    {
        return $this->getPermission($user,11);
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\User  $user
     * @param  \App\role  $role
     * @return mixed
     */
    public function update(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\User  $user
     * @param  \App\role  $role
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
    }
    protected function getPermission($user,$p_id)
    {
        foreach ($user -> role as $role) {
            foreach ($role -> permissions as $permission) {
                if ($permission -> id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
