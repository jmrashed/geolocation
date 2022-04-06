<?php

return [

    /*
     * The api key used when sending Geocoding requests to Google.
     */
    'key' => env('GOOGLE_MAPS_GEOCODING_API_KEY', ''),

    /*
     * The language param used to set response translations for textual data.
     *
     */

    'language' => '',

    /*
     * The region param used to finetune the geocoding process.
     *
     */
    'region' => '',

    /*
     * The bounds param used to finetune the geocoding process.
     *
     */
    'bounds' => '',

    /*
     * The country param used to limit results to a specific country.
     *
     */
    'country' => '',

];