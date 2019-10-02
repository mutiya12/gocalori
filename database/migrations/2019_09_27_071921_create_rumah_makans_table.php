<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRumahMakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah_makans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pemilik');
            $table->String('deskripsi');
            $table->timestamps();
            $table->decimal('logitude',10,7);
            $table->decimal('latitude',10,7);

            // $table->foreignkey('id_pemilik')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rumah_makans');
    }
}
