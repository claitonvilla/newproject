<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pacotes_id')->unsigned();
            $table->foreign('pacotes_id')->references('id')->on('pacotes')->onDelete('cascade')->onUpdate('cascade');
            $table->text('Check-in');
            $table->text('Check-out');
            $table->text('Pets');
            $table->text('Policies');
            $table->text('Fees');
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
        Schema::dropIfExists('infos');
    }
}
