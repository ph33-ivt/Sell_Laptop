<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
         App\Role::class => App\Policies\RolePolicy::class,
         Role::class => RolePolicy::class,
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
                if($role->id != $p_id)
                {
                    return true;
                }
            }
            return false;
          });

    }
}
