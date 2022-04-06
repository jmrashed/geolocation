<?php

namespace Jmrashed\Geolocation\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Jmrashed\Geolocation\Models\Geo\GeoSubContinent;

class GeoSubContinentSeeder extends Seeder
{

    public function run()
    {

        $sub_continents = [
            ['Southern Asia', 2],
            ['Middle Africa', 3],
            ['Northern Europe', 4],
            ['Southern Europe', 4],
            ['Western Asia', 2],
            ['Polynesia', 6],
            ['Australia and New Zealand', 6],
            ['Western Europe', 4],
            ['Eastern Africa', 3],
            ['Western Africa', 3],
            ['Eastern Europe', 4],
            ['South-Eastern Asia', 2],
            ['Southern Africa', 3],
            ['Eastern Asia', 2],
            ['Northern Africa', 3],
            ['Melanesia', 6],
            ['Micronesia', 6],
            ['Central Asia', 2],
        ];
        foreach ($sub_continents as $sub_continent) {
            $geo = new GeoSubContinent();
            $geo->name = $sub_continent[0];
            $geo->continent_id = $sub_continent[1];
            $geo->save();
        }
    }
}
