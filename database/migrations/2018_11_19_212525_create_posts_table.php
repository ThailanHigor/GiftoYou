<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("User_id")->unsigned()->index()->nullable();;
            $table->string("Legenda",1000);
            $table->string("Latitude",20);
            $table->string("Longitude",20);
            $table->string("Foto",255);
            $table->boolean("Excluido",0);
            $table->boolean("Liberado",1);
            $table->timestamps();
            $table->foreign('User_id')->references('id')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
