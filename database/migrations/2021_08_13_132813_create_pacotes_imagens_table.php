<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotesImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes_imagens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pacotes_id')->unsigned();
            $table->foreign('pacotes_id')->references('id')->on('pacotes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('imagens_id')->unsigned();
            $table->foreign('imagens_id')->references('id')->on('imagens')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pacotes_imagens');
    }
}
