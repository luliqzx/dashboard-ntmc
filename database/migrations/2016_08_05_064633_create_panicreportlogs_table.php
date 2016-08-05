<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanicreportlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panic_report_log', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->integer('status_id');
            $table->text('action');
            $table->integer('user_id');
            $table->integer('panic_reports_id')->unsigned();
            $table->integer('panic_reports_lokasi_truk_id')->unsigned();
            $table->integer('status_id1')->unsigned();
            $table->integer('users_id')->unsigned();

            // $table->foreign('panic_reports_id')->references('id')
            //     ->on('panic_reports');
            // $table->foreign('panic_reports_lokasi_truk_id')->references('id')
            //     ->on('lokasi_truk');
            // $table->foreign('status_id1')->references('id')
            //     ->on('status');
            // $table->foreign('users_id')->references('id')
            //     ->on('users');
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
        Schema::drop('panic_report_log');
    }
}
