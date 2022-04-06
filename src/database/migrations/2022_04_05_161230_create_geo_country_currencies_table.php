<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoCountryCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('geo_country_currencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('geo_countries')->onDelete('cascade');
            $table->foreignId('currency_id')->constrained('geo_currencies')->onDelete('cascade');
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
        Schema::dropIfExists('geo_country_currencies');
    }
}
