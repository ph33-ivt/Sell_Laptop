<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name'        => 'view-backend',
                'display_name' => 'View Backend',
            ],
            [
                'name'        => 'view-frontend',
                'display_name' => 'View Frontend',
            ],
            [
                'name'        => 'view-user-management',
                'display_name' => 'View User Management',
            ],
            [
                'name'        => 'show-user',
                'display_name' => 'Show User Details',
            ],
            [
                'name'        => 'create-user',
                'display_name' => 'Create User',
            ],
            [
                'name'        => 'edit-user',
                'display_name' => 'Edit User',
            ],

            [
                'name'        => 'delete-user',
                'display_name' => 'Delete User',
            ],
            [
                'name'        => 'view-role-management',
                'display_name' => 'View Role Management',
            ],
            [
                'name'        => 'create-role',
                'display_name' => 'Create Role',
            ],
            [
                'name'        => 'edit-role',
                'display_name' => 'Edit Role',
            ],
            [
                'name'        => 'delete-role',
                'display_name' => 'Delete Role',
            ],
            [
                'name'        => 'view-permission-management',
                'display_name' => 'View Permission Management',
            ],
            [
                'name'        => 'create-permission',
                'display_name' => 'Create Permission',
            ],
            [
                'name'        => 'edit-permission',
                'display_name' => 'Edit Permission',
            ],

            [
                'name'        => 'delete-permission',
                'display_name' => 'Delete Permission',
            ],


        ];
        DB::table('Permissions')->insert($permissions);
    }
}
