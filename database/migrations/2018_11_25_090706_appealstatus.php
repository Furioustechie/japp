<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Appealstatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appealstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('statusid');
            $table->string('state');
            $table->timestamp('laststatusupdate');
            $table->timestamps();

            $table->foreign('statusid')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
