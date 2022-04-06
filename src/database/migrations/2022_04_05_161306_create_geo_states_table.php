<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  
        Schema::create('geo_states', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->foreignId('country_id')->constrained('geo_countries')->onDelete('cascade');
            $table->string('hasc',20);
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
        Schema::dropIfExists('geo_states');
    }
}
