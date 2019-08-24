<?php

use Illuminate\Database\Seeder;
use App\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user permission
          $role =  Role::find(5);
          $role->permissions()->attach(2);
        //admin permission
          $per = [1,3,4,5,6,7,8,9,10,11,12,13,14,15];
          $role =  Role::find(3);
          $role->permissions()->attach($per);


    }
}
