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
                'name' => 'master',
                'email' => 'master@gmail.com',
                'password' => bcrypt('master'),
            ],
            [
                'name' => 'admin',
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
                'name' => 'tran anh',
                'email' => 'trananh@hbc.com',
                'password' => bcrypt('trananh'),
            ],
            [
                'name' => 'nguyen loc',
                'email' => 'loc322@hbc.com',
                'password' => bcrypt('nguyenloc'),
            ],

        ];
        DB::table('users')->insert($users);
    }
}
