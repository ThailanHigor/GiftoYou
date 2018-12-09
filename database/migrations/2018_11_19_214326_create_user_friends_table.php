<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_friends', function (Blueprint $table) {
            $table->integer("User_Id")->unsigned()->index()->nullable();
            $table->integer("UserFriend_Id")->unsigned()->index()->nullable();
            $table->boolean("Excluido",0);
            $table->boolean("Liberado",1);
            $table->timestamps();

            $table->foreign('UserFriend_Id')->references('id')->on('users');
            $table->foreign('User_Id')->references('id')->on('users');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_friends');
    }
}
