<?php

namespace App\Providers;


use App\Policies\PermissionPolicy;
use App\Policies\UserPolicy;
use App\Policies\RolePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Role;
use App\User;
use App\Permission;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
         Role::class => RolePolicy::class,
         User::class => UserPolicy::class,
         Permission::class => PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gate::resource('roles','App\Policies\RolePolicy');
        Gate::define('isAdmin', function ($user) {
            foreach ($user->roles as $role) {
                if( $role->id != 5)
                {
                    return true;
                }
                return false;
            }
          });
    }
}
