<?php

use Illuminate\Database\Seeder;

class ImgsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imgs')->insert([
            'img' => 'images/banner.jpg',
            'position' => '1',
            'visibility' => '1',
            'title' => 'Banner',
            'subtitle' => null,
            'section_id' => '1',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/spotlight01.jpg',
            'position' => '1',
            'visibility' => '1',
            'title' => 'Perfil',
            'subtitle' => null,
            'section_id' => '2',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/default.jpg',
            'position' => '1',
            'visibility' => '1',
            'title' => 'Noticias',
            'subtitle' => null,
            'section_id' => '3',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/spotlight03.jpg',
            'position' => '1',
            'visibility' => '1',
            'title' => 'Nosotros',
            'subtitle' => null,
            'section_id' => '4',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/pic01.jpg',
            'position' => '1',
            'visibility' => '1',
            'title' => 'Testimonio 1',
            'subtitle' => 'texto',
            'section_id' => '5',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/pic02.jpg',
            'position' => '2',
            'visibility' => '1',
            'title' => 'Testimonio 2',
            'subtitle' => 'texto',
            'section_id' => '5',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/pic03.jpg',
            'position' => '3',
            'visibility' => '1',
            'title' => 'Testimonio 3',
            'subtitle' => 'texto',
            'section_id' => '5',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/default.jpg',
            'position' => '4',
            'visibility' => '1',
            'title' => 'Testimonio 4',
            'subtitle' => 'texto',
            'section_id' => '5',
        ]);

           DB::table('imgs')->insert([
            'img' => 'images/pic01.jpg',
            'position' => '1',
            'visibility' => '1',
            'title' => 'Testimonio 1',
            'subtitle' => 'texto',
            'section_id' => '7',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/pic02.jpg',
            'position' => '2',
            'visibility' => '1',
            'title' => 'Testimonio 2',
            'subtitle' => 'texto',
            'section_id' => '7',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/pic03.jpg',
            'position' => '3',
            'visibility' => '1',
            'title' => 'Testimonio 3',
            'subtitle' => 'texto',
            'section_id' => '7',
        ]);

        DB::table('imgs')->insert([
            'img' => 'images/default.jpg',
            'position' => '4',
            'visibility' => '1',
            'title' => 'Testimonio 4',
            'subtitle' => 'texto',
            'section_id' => '7',
        ]);
    }
}
