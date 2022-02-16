<?php

namespace App\Policies;

use App\Models\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\User  $user
     * @param  \App\admin  $admin
     * @return mixed
     */
    public function view(admin $user)
    {
        return $this->getPermission($user,12);
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user,5);
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\User  $user
     * @param  \App\admin  $admin
     * @return mixed
     */
    public function update(admin $user)
    {
        return $this->getPermission($user,6);
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\User  $user
     * @param  \App\admin  $admin
     * @return mixed
     */
    public function delete(admin $user)
    {
        return $this->getPermission($user,7);
    }

    protected function getPermission($user,$p_id)
    {
        foreach ($user->role as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission -> id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
