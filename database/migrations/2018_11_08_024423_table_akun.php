<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAkun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akuns', function (Blueprint $table) {
            $table->increments('akun_id');
            $table->integer('subgol_id')->unsigned();
            $table->string('akun_nama', 50); 
            $table->enum('akun_js', ['debit', 'kredit']);
            $table->enum('akun_ap', ['ya', 'tidak']);
            $table->timestamps();

            $table->foreign('subgol_id')
            ->references('subgol_id')->on('subgols')
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
        Schema::dropIfExists('akuns');
    }
}
