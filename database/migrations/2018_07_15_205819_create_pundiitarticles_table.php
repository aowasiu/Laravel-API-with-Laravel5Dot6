<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePundiitarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pundiitarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identity');
            $table->string('name');
            $table->string('author');
            $table->string('title');
            $table->string('body');
            $table->string('url');
            $table->string('imageUrl');
            $table->string('publicationDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pundiitarticles');
    }
}
