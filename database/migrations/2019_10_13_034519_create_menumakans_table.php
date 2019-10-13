<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenumakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menumakans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('name');
            $table->Integer('harga');
            $table->float('tot_kalori');
            $table->String('keterangan');
            $table->String('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
