<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('services')->insert([
            'icon_id' => '1',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '2',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '3',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'content' => 'contenido',
            'banner_img' => 'images/slider-default.jpg',
            'visibility' => '1',
            'section_id' => '6',
        ]); 

        DB::table('services')->insert([
            'icon_id' => '4',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '5',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '6',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '7',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '8',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '9',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '10',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '11',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);

        DB::table('services')->insert([
            'icon_id' => '12',
            'title' => 'Servicio',
            'description' => 'Descripción',
            'banner_img' => 'images/slider-default.jpg',
            'content' => 'contenido',
            'visibility' => '1',
            'section_id' => '6',
        ]);
    }
}
