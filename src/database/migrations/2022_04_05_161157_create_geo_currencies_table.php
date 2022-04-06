<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('code',5);
            $table->string('name',255);
            $table->string('major_name',255)->default('');
            $table->string('major_symbol',50)->default('');
            $table->string('minor_name',255)->default('');
            $table->string('minor_symbol',10)->default('');
            $table->decimal('minor_value',25,6)->default(0.0);
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
        Schema::dropIfExists('geo_currencies');
    }
}
