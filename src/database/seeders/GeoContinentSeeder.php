<?php

namespace Jmrashed\Geolocation\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Jmrashed\Geolocation\Models\Geo\GeoContinent;

class GeoContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continents = [
            'North America',
            'Asia',
            'Africa',
            'Europe',
            'South America',
            'Oceania',
            'Antarctica',
        ];

        foreach ($continents as $continent) {
            $geo = new GeoContinent();
            $geo->name = $continent;
            $geo->save();
        }
    }
}
