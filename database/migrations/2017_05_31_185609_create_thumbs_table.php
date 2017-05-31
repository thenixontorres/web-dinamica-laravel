<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatethumbsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumb');
            $table->integer('article_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('thumbs');
    }
}
