<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatJadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalmatkul', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mahasiswa',false,true);
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->integer('id_ruangan',false,true);
            $table->foreign('id_ruangan')->references('id')->on('ruangan')->onDelete('cascade');
            $table->integer('id_dosen_matkul',false,true);
            $table->foreign('id_dosen_matkul')->references('id')->on('dosen_matakuliah')->onDelete('cascade');
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
        Schema::drop('jadwalmatkul');
    }
}
