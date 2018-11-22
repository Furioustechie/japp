<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDisidToPrisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prisons', function (Blueprint $table) {
            $table->unsignedInteger('disid');
                
                $table->foreign('disid')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prisons', function (Blueprint $table) {
            $table->dropColumn('disid');
        });
    }
}
