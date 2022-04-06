<?php

namespace Jmrashed\Geolocation\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(GeoContinentSeeder::class);
        $this->call(GeoSubContinentSeeder::class);
        $this->call(GeoCountrySeeder::class);
        $this->call(GeoCurrencySeeder::class);
        $this->call(GeoCountryCurrencySeeder::class);
        $this->call(GeoZoneSeeder::class);
        $this->call(GeoStateSeeder::class);
        $this->call(GeoCitySeeder::class);
        
    }
}
