<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('categorias_user', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('User_id')->unsigned()->index();
        //     $table->foreign('User_id')->references('id')->on('Users');

        //     $table->integer('Categorias_id')->unsigned()->index();
        //     $table->foreign('Categorias_id')->references('id')->on('Categorias');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_categorias');
    }
}
