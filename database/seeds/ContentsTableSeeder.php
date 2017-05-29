<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'title' => 'Espacio Pisanu',
            'subtitle' => 'Salud & estética.',
            'body' => 'Dr. Carlos Pisanu',
            'button_link' => '#',
            'button_text' => 'COMENZAR',
            'visibility' => '1',
            'section_id' => '1',
        ]);

        DB::table('contents')->insert([
            'title' => 'Dr. Carlos Pisanu.',
            'subtitle' => null,
            'body' => 'Detalles sobre el resumen curricular, experiencia, trabajo, objetivos y visión.',
            'button_link' => '#',
            'button_text' => 'MÁS INFORMACIÓN',
            'visibility' => '1',
            'section_id' => '2',
        ]);

        DB::table('contents')->insert([
            'title' => 'Renovamos nuestro equipamiento.',
            'subtitle' => null,
            'body' => '"Somos lo primeros en traer equipamiento de última generación" detalles sobre la nueva adquisición.',
            'button_link' => '#',
            'button_text' => 'MÁS INFORMACIÓN',
            'visibility' => '1',
            'section_id' => '3',
        ]);

        DB::table('contents')->insert([
            'title' => 'Sobre nosotros.',
            'subtitle' => null,
            'body' => 'Detalles sobre el centro de estetica.',
            'button_link' => '#',
            'button_text' => 'MÁS INFORMACIÓN',
            'visibility' => '1',
            'section_id' => '4',
        ]);

        DB::table('contents')->insert([
            'title' => 'Testimonios de nuestros clientes.',
            'subtitle' => null,
            'body' => 'Tenemos un concepto estetico muy claro, restaltamos la belleza con nuestro arte profesional no la fabricamos',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '5',
        ]);

        DB::table('contents')->insert([
            'title' => 'Tratamientos que brinda nuestro equipo de salud profesional',
            'subtitle' => null,
            'body' => 'Contamos con una alta variedad de servicios para los cuidados esteticos que necesitas.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '6',
        ]);
    }
}
