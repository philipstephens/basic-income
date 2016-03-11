<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdprecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gdprecords', function (Blueprint $table) {
            $table->increments('id');
            $table->char('country_id', 2);
            $table->integer('year');
            $table->bigInteger('adultpopulation');
            $table->bigInteger('childpopulation');
            $table->decimal('gdpcapita',8,2);
            $table->timestamps();
            $table->foreign('country_id')->references('country_id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gdprecords');
    }
}
