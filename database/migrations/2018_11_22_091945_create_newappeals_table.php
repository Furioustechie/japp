<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewappealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newappeals', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dateofsentence');
            $table->dateTime('dateofpetitionforcc');
            $table->dateTime('dateofccreceipt');
            $table->dateTime('dateoforderonappeal');
            $table->dateTime('dateoforderreceipt');
            $table->dateTime('dateofticketnotes');
            $table->dateTime('dateofappeal');
            $table->boolean('privacy');
            $table->unsignedInteger('prisonid');
            $table->unsignedInteger('prisonerid');
            $table->unsignedInteger('courtid');
            $table->unsignedInteger('caseid');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('offenceid');
            $table->unsignedInteger('sentenceid');
           // $table->unsignedInteger('resultid');
            $table->timestamps();


            $table->foreign('prisonid')->references('id')->on('prisons');
            $table->foreign('prisonerid')->references('id')->on('prisoner');
            $table->foreign('courtid')->references('id')->on('courts');
            $table->foreign('caseid')->references('id')->on('cases');
            $table->foreign('offenceid')->references('id')->on('offences');
            $table->foreign('sentenceid')->references('id')->on('sentences');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newappeals');
    }
}
