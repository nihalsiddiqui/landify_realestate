<?php

namespace App\Policies;

use App\Models\admin;
use App\Models\permission;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the permission.
     *
     * @param  \App\User  $user
     * @param  \App\permission  $permission
     * @return mixed
     */
    public function view(admin $user)
    {
        return $this->getPermission($user,10);
    }

    /**
     * Determine whether the user can create permissions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can update the permission.
     *
     * @param  \App\User  $user
     * @param  \App\permission  $permission
     * @return mixed
     */
    public function update(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the permission.
     *
     * @param  \App\User  $user
     * @param  \App\permission  $permission
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
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
