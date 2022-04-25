<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MahasiswaMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('mahasiswa_matakuliah', function(Blueprint $table){
            $table->id();
            $table->string('mahasiswa_id')->nullable();
            $table->unsignedBigInteger('matakuliah_id')->nullable();
            $table->string('nilai');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
            $table->foreign('mahasiswa_id')->references('nim')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExist('mahasiswa_matakuliah');
    }
}
