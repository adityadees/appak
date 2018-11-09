<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSubgol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subgols', function (Blueprint $table) {
            $table->increments('subgol_id');    
            $table->integer('gol_id')->unsigned();
            $table->string('subgol_nama', 50); 
            $table->enum('subgol_js', ['debit', 'kredit']);
            $table->enum('subgol_ap', ['ya', 'tidak']);
            $table->timestamps();

            $table->foreign('gol_id')
            ->references('gol_id')->on('gols')
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
        Schema::dropIfExists('subgols');
    }
}
