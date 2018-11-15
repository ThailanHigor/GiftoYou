<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users_lojas', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('User_id')->unsigned()->index();
        //     $table->foreign('User_id')->references('Id')->on('Users');

        //     $table->integer('Lojas_id')->unsigned()->index();
        //     $table->foreign('Lojas_id')->references('Id')->on('Lojas');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_lojas');
    }
}
