<?php

namespace App\Providers;


use App\Policies\PermissionPolicy;
use App\Policies\UserPolicy;
use App\Policies\RolePolicy;
use App\Policies\ProductPolicy;
use App\Policies\CategoryPolicy;
use Illuminate\Support\Facades\Gate;
use App\Policies\OrderPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Role;
use App\User;
use App\Permission;
use App\Product;
use App\Category;
use App\Order;


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
         Product::class => ProductPolicy::class,
         Category::class => CategoryPolicy::class,
         Order::class => OrderPolicy::class,
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
                if($role->id != 5)
                 {
                    return true;
                 }

            }
            return false;
          });
    }
}
