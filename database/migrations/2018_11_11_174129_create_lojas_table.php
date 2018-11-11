<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('lojas', function (Blueprint $table) {
        //     $table->increments('Id');
        //     $table->string("Nome",255);
        //     $table->string("Slug",200);
        //     $table->string("Latitude",20);
        //     $table->string("Longitude",20);
        //     $table->string("Imagem_Thumb",255);
        //     $table->timestamps();
        //     $table->boolean("Excluido",0);
        //     $table->boolean("Liberado",1);
            

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lojas');
    }
}
