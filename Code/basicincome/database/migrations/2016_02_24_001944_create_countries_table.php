<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->char('country_id', 2)->unique();
            $table->string('name', 80);
            $table->string('nicename', 80);
            $table->char('iso3', 3);
            $table->char('continents_id', 2);
            $table->char('flag', 29)->unique;
            $table->timestamps();
            $table->primary('country_id');
            $table->foreign('continents_id')->references('continents_id')->on('continents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
