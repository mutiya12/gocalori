<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerhitungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->integer('usia');
            $table->string('gender');
            $table->string('kegiatan');
            $table->integer('perhitungan');
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
        Schema::dropIfExists('perhitungan');
    }
}
