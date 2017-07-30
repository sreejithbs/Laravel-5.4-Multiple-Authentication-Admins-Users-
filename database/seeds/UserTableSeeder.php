<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->firstName = 'User';
        $user->lastName = 'Demo';
        $user->email = 'user@demo.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
