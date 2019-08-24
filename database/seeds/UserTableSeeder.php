<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users =  [
            [
                'name' => 'Master',
                'email' => 'master@gmail.com',
                'password' => bcrypt('master'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('manager'),
            ],
            [
                'name' => 'Moderator',
                'email' => 'moderator@gmail.com',
                'password' => bcrypt('moderator'),
            ],
            [
                'name' => 'hoang nguyen',
                'email' => 'nguyennhdn@gmail.com',
                'password' => bcrypt('nguyen'),
            ],
            [
                'name' => 'Nguyen Anh',
                'email' => 'nguyenanh@hbc.com',
                'password' => bcrypt('nguyenanh'),
            ],
            [
                'name' => 'Tran loc',
                'email' => 'loc322@hbc.com',
                'password' => bcrypt('tranloc'),
            ],

        ];
        DB::table('users')->insert($users);
    }
}
