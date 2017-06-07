<?php

use Illuminate\Database\Seeder;

class ConstansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('constants')->insert([
            'var' => 'Email de contacto',
            'value' => 'Example@email.com',
        ]);

       DB::table('constants')->insert([
            'var' => 'Boton de contacto',
            'value' => 'ENVIAR MENSAJE',
        ]);

       DB::table('constants')->insert([
            'var' => 'Enlace a Twitter',
            'value' => 'https://www.example.com/',
        ]);

       DB::table('constants')->insert([
            'var' => 'Enlace a Facebook',
            'value' => 'https://www.example.com/',
        ]);

       DB::table('constants')->insert([
            'var' => 'Enlace a Instagram',
            'value' => 'https://www.example.com/',
        ]);

       DB::table('constants')->insert([
            'var' => 'Enlace a Linked in',
            'value' => 'https://www.example.com/',
        ]);

       DB::table('constants')->insert([
            'var' => 'Telefono/Whatsapp',
            'value' => '0000-000-0000',
        ]);

       DB::table('constants')->insert([
            'var' => 'Email',
            'value' => 'Example@email.com',
        ]);
    }
}
