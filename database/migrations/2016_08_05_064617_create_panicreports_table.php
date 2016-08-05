<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanicreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panic_report', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_supir');
            $table->dateTime('date');
            $table->integer('status_id');
            $table->integer('lokasi_truk_id')->unsigned();
            $table->integer('status_id1')->unsigned();
            // $table->foreign('lokasi_truk_id')->references('id')
            //     ->on('lokasi_truk');
            // $table->foreign('status_id1')->references('id')->on('status');
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
        Schema::drop('panic_report');
    }
}
