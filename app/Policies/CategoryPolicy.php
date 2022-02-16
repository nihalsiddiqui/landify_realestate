<?php

namespace App\Policies;

use App\Models\admin;
use App\Models\category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\User  $user
     * @param  \App\category  $category
     * @return mixed
     */
    public function view(admin $user)
    {
        return $this->getPermission($user,8);
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {

    }

    /**
     * Determine whether the admin can update the category.
     *
     * @param  \App\User  $admin
     * @param  \App\category  $category
     * @return mixed
     */
    public function update(admin $user)
    {

    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User  $user
     * @param  \App\category  $category
     * @return mixed
     */
    public function delete(admin $user)
    {

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
