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
          $role->permissions()->attach([2,3,8,12,16,20]);
        //master permission
          $per = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
          $role =  Role::find(1);
          $role->permissions()->attach($per);
        // admin permission
          $role =  Role::find(2);
          $peradmin = [1,2,3,4,5,6,8,9,10,12,13,14,16,17,18,19,20,21,22,24,25];
          $role->permissions()->attach($peradmin);


    }
}
