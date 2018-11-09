<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gols', function (Blueprint $table) {
           $table->engine = 'InnoDB';
           $table->increments('gol_id');
           $table->integer('kelompok_id')->unsigned();
           $table->string('gol_nama', 50); 
           $table->timestamps();

           $table->foreign('kelompok_id')
           ->references('kelompok_id')->on('kelompoks')
           ->onDelete('cascade')
           ->onUpdate('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gols');
    }
}
