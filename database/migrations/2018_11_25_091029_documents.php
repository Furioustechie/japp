<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('appealid');
            $table->unsignedInteger('doctypeid');
            $table->boolean('attached');
            $table->string('filename');
            $table->unsignedInteger('requestedcourt');
            $table->timestamp('requesteddate');
            $table->timestamps();

            $table->foreign('appealid')->references('id')->on('newappeals');
            $table->foreign('doctypeid')->references('id')->on('doctype');
            $table->foreign('requestedcourt')->references('id')->on('courts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
