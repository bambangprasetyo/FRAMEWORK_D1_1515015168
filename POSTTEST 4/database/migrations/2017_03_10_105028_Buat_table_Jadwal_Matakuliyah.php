<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalMatakuliyh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jadwal_Matakuliyah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Mahasiswa_id')->unsigned();
            $table->foreign('Mahasiswa_id')->references('id')->on('Mahasiswa');
            $table->integer('Ruangan_id')->unsigned();
            $table->foreign('Ruangan_id')->references('id')->on('Ruangan');
            $table->integer('Dosen_Matakuliyah_id')->unsigned();
            $table->foreign('Dosen_Matakuliyah_id')->references('id')->on('Dosen_Matakuliyah');
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
        Schema::drop('Jadwal_Matakuliyah');
    }
}
