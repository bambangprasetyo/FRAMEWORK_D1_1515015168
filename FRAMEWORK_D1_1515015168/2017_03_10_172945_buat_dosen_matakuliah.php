<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosenmatkul', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_dosen',false,true);
            $table->string('id_dosen')->references('id')->on('dosen')->onDelete('cascade');
            $table->integer('matakuliah_id',false,true);
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onDelete('cascade');
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
        Schema::drop('dosenmatkul');
    }
}
