<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatesectionConfigsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->unsigned();
            $table->enum('structure',['slider', 'carousel', 'standar','blog','board']);
            $table->enum('imgs',['no-img', 'one-active-img', 'multi-active-img']);
            $table->enum('btns',['no-btn', 'btn']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('section_id')->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('section_configs');
    }
}
