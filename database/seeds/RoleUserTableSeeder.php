<?php

use Illuminate\Database\Seeder;
use App\User;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $user->roles()->attach(1);
        $user = User::find(2);
        $user->roles()->attach(2);
        $user = User::find(3);
        $user->roles()->attach(3);
        $user = User::find(4);
        $user->roles()->attach([4]);
        $user = User::find(5);
        $user->roles()->attach([5]);
        $user = User::find(6);
        $user->roles()->attach(5);
        $user = User::find(7);
        $user->roles()->attach(5);
    }
}
