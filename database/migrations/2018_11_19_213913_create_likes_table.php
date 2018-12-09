<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('likes', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer("PostId")->unsigned()->index()->nullable();
        //     $table->integer("User_id")->unsigned()->index()->nullable();
        //     $table->boolean("Excluido",0);
        //     $table->boolean("Liberado",1);
        //     $table->timestamps();

        //     $table->foreign('PostId')->references('id')->on('posts');
        //     $table->foreign('User_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
