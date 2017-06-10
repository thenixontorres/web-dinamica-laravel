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

        DB::table('contents')->insert([
            'title' => 'Titulo del Slider.',
            'subtitle' => 'Subtitulo del slider',
            'body' => null,
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '7',
        ]);

        DB::table('contents')->insert([
            'title' => 'Dr. Carlos Pisanu.',
            'subtitle' => 'Detalles sobre el resumen curricular, experiencia, trabajo, objetivos y visión',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '8',
        ]);

        DB::table('contents')->insert([
            'title' => 'Spotlight.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '9',
        ]);

        DB::table('contents')->insert([
            'title' => 'Sobre Nosotros.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '10',
        ]);

        DB::table('contents')->insert([
            'title' => 'Mision.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Cuerpo de la seccion.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '11',
        ]);

        DB::table('contents')->insert([
            'title' => 'Nuestro Equipo.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Cuerpo de la seccion.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '12',
        ]);

        DB::table('contents')->insert([
            'title' => null,
            'subtitle' => null,
            'body' => null,
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '13',
        ]);

        DB::table('contents')->insert([
            'title' => 'Noticia 1.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '14',
        ]);

        DB::table('contents')->insert([
            'title' => 'Noticia 2.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '15',
        ]);

        DB::table('contents')->insert([
            'title' => 'Noticia.',
            'subtitle' => 'Subtitulo de la seccion',
            'body' => 'Cuerpo de la seccion.',
            'button_link' => null,
            'button_text' => null,
            'visibility' => '1',
            'section_id' => '16',
        ]);
    }
}
