<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('chamada');
            $table->integer('noites');
            $table->boolean('pass_area');
            $table->text('endereço')->nullable();
            $table->text('descricao');
            $table->text('mapa')->nullable();
            $table->string('contato_nome');
            $table->string('contato_tel')->nullable();
            $table->string('contato_cel')->nullable();
            $table->string('email');
            $table->boolean('status');
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
        Schema::dropIfExists('pacotes');
    }
}
