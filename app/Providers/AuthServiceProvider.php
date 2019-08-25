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
        Gate::define('isAdmin', function ($user, $p_id) {
            foreach ($user->roles as $role) {
                if($role->id != $p_id && $user->roles != '')
                {
                    return true;
                }
            }
            return false;
          });
          // check user view management of role
        //   Gate::define('viewindex', function ($user) {
        //     foreach ($user->roles as $role ) {
        //         foreach ($role->permissions as $permission) {
        //             if($permission->id == 8)
        //             {
        //                 return true;
        //             }
        //         }
        //     }
        //     return false;
        //   });
    }
}
