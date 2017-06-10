<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => 'Home',
            'url' => '/home',
            'visibility' => '1',
        ]);

        DB::table('pages')->insert([
            'title' => 'Blog',
            'url' => '/blog',
            'visibility' => '1',
        ]);

        DB::table('pages')->insert([
            'title' => 'perfil',
            'url' => '/perfil',
            'visibility' => '1',
        ]);

        DB::table('pages')->insert([
            'title' => 'acerca',
            'url' => '/acerca',
            'visibility' => '1',
        ]);

        DB::table('pages')->insert([
            'title' => 'noticias',
            'url' => '/noticias',
            'visibility' => '1',
        ]);
    }
}
