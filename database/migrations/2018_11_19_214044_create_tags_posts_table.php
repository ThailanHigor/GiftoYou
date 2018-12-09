<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tags_posts', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer("PostId")->unsigned()->index()->nullable();
        //     $table->string("NomeTag");
        //     $table->boolean("Excluido",0);
        //     $table->boolean("Liberado",1);
        //     $table->timestamps();

            
        //     $table->foreign('PostId')->references('id')->on('posts');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags_posts');
    }
}
