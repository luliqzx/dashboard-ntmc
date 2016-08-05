<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasitruksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_truk', function (Blueprint $table) {
            $table->increments('id');
            $table->float('lat');
            $table->float('long');
            $table->dateTime('date');
            $table->float('heading');
            $table->integer('status');
            $table->integer('Trucks_Id')->unsigned();
            // $table->foreign('Trucks_Id')->references('id')->on('Trucks');
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
        Schema::drop('lokasi_truk');
    }
}
