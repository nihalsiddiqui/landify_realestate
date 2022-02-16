<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**企业账户
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });

        //Gate for posts
        Gate::resource('posts', 'App\Policies\PostPolicy');
        //Gate for categories
        Gate::resource('categories', 'App\Policies\CategoryPolicy');
        //Gate for tags
        Gate::resource('tags', 'App\Policies\TagPolicy');
        //Gate for permissions
        Gate::resource('permissions', 'App\Policies\PermissionPolicy');
        //Gate for Admins Users
        Gate::resource('users', 'App\Policies\UserPolicy');
        //Gate for Roles
        Gate::resource('roles', 'App\Policies\RolePolicy');
    }
}
