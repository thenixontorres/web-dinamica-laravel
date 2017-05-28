<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(ImgsTableSeeder::class);
        $this->call(ConstansTableSeeder::class);
    }
}
