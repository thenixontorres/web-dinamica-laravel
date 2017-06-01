<?php

use Illuminate\Database\Seeder;

class SectionConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section_configs')->insert([
            'section_id' => '1',
            'structure' => 'standar',
            'imgs' => 'one-active-img',
            'btns' => 'btn',
        ]);

        DB::table('section_configs')->insert([
            'section_id' => '2',
            'structure' => 'standar',
            'imgs' => 'one-active-img',
            'btns' => 'btn',
        ]);

        DB::table('section_configs')->insert([
            'section_id' => '3',
            'structure' => 'standar',
            'imgs' => 'one-active-img',
            'btns' => 'btn',
        ]);

        DB::table('section_configs')->insert([
            'section_id' => '4',
            'structure' => 'standar',
            'imgs' => 'one-active-img',
            'btns' => 'btn',
        ]);

        DB::table('section_configs')->insert([
            'section_id' => '5',
            'structure' => 'carousel',
            'imgs' => 'multi-active-img',
            'btns' => 'no-btn',
        ]);

        DB::table('section_configs')->insert([
            'section_id' => '6',
            'structure' => 'standar',
            'imgs' => 'no-img',
            'btns' => 'no-btn',

        ]);

        DB::table('section_configs')->insert([
            'section_id' => '7',
            'structure' => 'slider',
            'imgs' => 'multi-active-img',
            'btns' => 'no-btn',
        ]);
    }
}