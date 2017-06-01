<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Cabecera',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Perfil',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Noticias',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Acerca',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Testimonio',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Servicios',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Slider',
            'page_id' => '1',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Bio',
            'page_id' => '3',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Spotlight',
            'page_id' => '3',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Sobre Nosotros',
            'page_id' => '4',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Misión',
            'page_id' => '4',
        ]);

        DB::table('sections')->insert([
            'visibility' => '1',
            'name' => 'Nuestro Equipo',
            'page_id' => '4',
        ]);
    }
}
