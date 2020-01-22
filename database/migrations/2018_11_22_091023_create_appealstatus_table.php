<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppealstatusTable extends Migration
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
            $table->string('state');
            //$table->string('appealid');
            //$table->string('statusid');
            $table->timestamps();

            //$table->foreign('appealid')->references('id')->on('appeals');
           // $table->foreign('statusid')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appealstatus');
    }
}
