<?php

namespace App\Policies;

use App\Models\admin;
use App\Models\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(admin $user)
    {
        return $this->getPermission($user,13);
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //

        // foreach ($user->role as $role) {
        //     foreach ($role->permissions as $permission) {
        //         if($permission->id == 1){
        //             return true;
        //         }
        //     }
        // }
        return $this->getPermission($user,1);

    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        // foreach ($user->role as $role) {
        //     foreach ($role->permissions as $permission) {
        //         if($permission->id == 3){
        //             return true;
        //         }
        //     }
        // }
        return $this->getPermission($user,3);

    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        // foreach ($user->role as $role) {
        //     foreach ($role->permissions as $permission) {
        //         if($permission->id == 4){
        //             return true;
        //         }
        //     }
        // }
        return $this->getPermission($user,4);

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
