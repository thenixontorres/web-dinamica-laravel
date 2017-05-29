<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'master',
            'email' => 'master@mail.com',
            'tipo' => 'master',
            'password' => bcrypt('master'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'tipo' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
