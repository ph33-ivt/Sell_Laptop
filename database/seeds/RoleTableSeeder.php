<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'        => 'Master',
                'description' => 'System builder, work out your system.!',
            ],
            [
                'name'       => 'Administrator',
                'description' => 'System administrator, full control of the system',
            ],
            [
                'name'       => 'Manager',
                'description' => 'System manager',
            ],
            [
                'name'       => 'Moderator',
                'description' => 'System moderator',
            ],
            [
                'name'       => 'Member',
                'description' => 'Sell the benefits, rather than selling features.',
            ],
        ];
        DB::table('roles')->insert($roles);
    }
}
