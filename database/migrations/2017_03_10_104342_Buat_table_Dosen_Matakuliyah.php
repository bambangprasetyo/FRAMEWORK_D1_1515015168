<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDosenMatakuliyah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dosen_Matakuliyah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Dosen_id')->unsigned();
            $table->foreign('Dosen_id')->references('id')->on('Dosen');
            $table->integer('Matakuliyah_id')->unsigned();
            $table->foreign('Matakuliyah_id')->references('id')->on('Matakuliyah');
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
        Schema::drop('Dosen_Matakuliyah');
    }
}
