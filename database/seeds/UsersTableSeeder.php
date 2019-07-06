<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'applephagna@gmail.com',
            'password' => bcrypt('Phagna@sa225'),
            'status' => 1
        ]);
    }
}
