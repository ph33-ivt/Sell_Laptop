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
                'address' => '82 ninh ton',
                'phone' => '0987876672',
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'address' => '02 nguyen tat thanh',
                'phone' => '043999877',
            ],
            [
                'name' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('manager'),
                'address' => '123K Le Duan',
                'phone' => '0337897654',
            ],
            [
                'name' => 'Moderator',
                'email' => 'moderator@gmail.com',
                'password' => bcrypt('moderator'),
                'address' => '01 nguyen van linh',
                'phone' => '0976625773',
            ],
            [
                'name' => 'hoang nguyen',
                'email' => 'nguyennhdn@gmail.com',
                'password' => bcrypt('nguyen'),
                'address' => '23 nguyen dinh chieu',
                'phone' => '0909378382',
            ],
            [
                'name' => 'tran anh',
                'email' => 'trananh@gmail.com',
                'password' => bcrypt('trananh'),
                'address' => '90 pham van dong',
                'phone' => '9017839293',
            ],
            [
                'name' => 'nguyen loc',
                'email' => 'nguyenloc@gmail.com',
                'password' => bcrypt('nguyenloc'),
                'address' => '34 ton that dam',
                'phone' => '0986737822',
            ],

        ];
        DB::table('users')->insert($users);
    }
}
