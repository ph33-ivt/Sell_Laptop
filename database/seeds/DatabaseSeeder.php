<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(RoleUserTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(PermissionRoleTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(ProductsImageTableSeeder::class);
    }
}

