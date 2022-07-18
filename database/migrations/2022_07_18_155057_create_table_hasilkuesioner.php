<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHasilkuesioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilkuesioner', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('npm');
            $table->foreignId('id_prodi'); 
            $table->foreign('id_prodi')->references('id')->on('prodi')->onDelete('cascade')->onUpdate('cascade');
            $table->string('email');
            $table->foreignId('id_jawaban'); 
            $table->foreign('id_jawaban')->references('id')->on('jawaban')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('hasilkuesioner');
    }
}
