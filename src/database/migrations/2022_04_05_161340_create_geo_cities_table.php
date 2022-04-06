<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_cities', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->foreignId('country_id')->constrained('geo_countries')->onDelete('cascade');
            $table->foreignId('state_id')->constrained('geo_states')->onDelete('cascade');
            $table->foreignId('zone_id')->constrained('geo_zones')->onDelete('cascade');
            $table->decimal('latitude',14,11)->default(0.00);
            $table->decimal('longitude',14,11)->default(0.00);
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
        Schema::dropIfExists('geo_cities');
    }
}
