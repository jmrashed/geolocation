<?php

use Illuminate\Support\Facades\Route;
use Jmrashed\Geolocation\Http\Controllers\GeolocationController;
 
// Route::get('geolocation', function () {
//     return view('geolocation::index');
// });

  Route::get('/geolocation', [GeolocationController::class, 'index'])->name('geolocation');