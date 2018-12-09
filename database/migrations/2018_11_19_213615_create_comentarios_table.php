<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('comentarios', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer("PostId");
        //     $table->integer("User_id");
        //     $table->string("Comentario",1000);
        //     $table->boolean("Excluido",0);
        //     $table->boolean("Liberado",1);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
