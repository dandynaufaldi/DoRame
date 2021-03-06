<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_lokasis', function (Blueprint $table) {
            $table->integer('idLokasi')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->string('komentar');
            $table->timestamps();
        });

        Schema::table('komentar_lokasis', function ($table){
            $table->foreign('idUser')->references('id')->on('users') ->onDelete('cascade');
            $table->foreign('idLokasi')->references('id')->on('lokasis') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_lokasis');
    }
}
