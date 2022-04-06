<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  
        Schema::create('geo_countries', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('cca2',3);
            $table->string('cca3',3);
            $table->integer('ccn3');
            $table->foreignId('continent_id')->constrained('geo_continents')->onDelete('cascade');
            $table->foreignId('sub_continent_id')->constrained('geo_sub_continents')->onDelete('cascade');

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
        Schema::dropIfExists('geo_countries');
    }
}
