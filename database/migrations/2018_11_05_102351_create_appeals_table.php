<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caseno');
            $table->string('sentencetype');
            $table->string('prisonname');
            $table->string('sharokno');
            $table->string('appealto');
            $table->string('remarks');
            $table->boolval('cc');
            $table->string('jappl');
            $table->string('bjform');
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
        Schema::dropIfExists('appeals');
    }
}
