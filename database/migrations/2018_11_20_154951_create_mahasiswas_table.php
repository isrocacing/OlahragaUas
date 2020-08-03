<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaSiswa');
            $table->integer('nisSiswa');
            $table->string('kelasSiswa');
            $table->string('jurusanSiswa');
            //$table->string('pembimbing1');
            //$table->string('pembimbing2');
            //$table->string('gambarMahasiswa');
           //$table->string('path');
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
        Schema::dropIfExists('mahasiswas');
    }
}
