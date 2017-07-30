<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->firstName = 'Admin';
        $admin->lastName = 'Demo';
        $admin->email = 'admin@demo.com';
        $admin->password = bcrypt('password');
        $admin->save();
    }
}
