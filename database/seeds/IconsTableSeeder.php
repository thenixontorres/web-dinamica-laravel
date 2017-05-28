<?php

use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'name' => 'Diamante',
            'css_value' => 'fa-diamond',
        ]);

         DB::table('icons')->insert([
            'name' => 'Floppy',
            'css_value' => 'fa-save',
        ]);

        DB::table('icons')->insert([
            'name' => 'Grafico',
            'css_value' => 'fa-bar-chart',
        ]);

        DB::table('icons')->insert([
            'name' => 'Wifi',
            'css_value' => 'fa-wifi',
        ]);

        DB::table('icons')->insert([
            'name' => 'Configuracion',
            'css_value' => 'fa-cog',
        ]);

        DB::table('icons')->insert([
            'name' => 'Avion de papel',
            'css_value' => 'fa-paper-plane',
        ]);

        DB::table('icons')->insert([
            'name' => 'Monitor',
            'css_value' => 'fa-desktop',
        ]);

        DB::table('icons')->insert([
            'name' => 'Actualizar',
            'css_value' => 'fa-refresh',
        ]);

        DB::table('icons')->insert([
            'name' => 'Hashtag',
            'css_value' => 'fa-hashtag',
        ]);

        DB::table('icons')->insert([
            'name' => 'Rayo',
            'css_value' => 'fa-bolt',
        ]);

        DB::table('icons')->insert([
            'name' => 'Mensaje',
            'css_value' => 'fa-envelope',
        ]);

        DB::table('icons')->insert([
            'name' => 'Hoja',
            'css_value' => 'fa-leaf',
        ]);
    }
}
