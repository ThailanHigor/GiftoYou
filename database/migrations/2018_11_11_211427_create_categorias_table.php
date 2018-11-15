<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('categorias', function (Blueprint $table) {
        // $table->increments('Id');
        // $table->string("Nome",255);
        // $table->string("Imagem_Thumb",255);
        // $table->timestamps();
        // $table->boolean("Excluido",0);
        // $table->boolean("Liberado",1);
        // });
    }
    

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
