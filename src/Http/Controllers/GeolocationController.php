<?php

namespace Jmrashed\Geolocation\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeolocationController extends Controller
{
    public function index()
    {
        return view('geolocation::index');
    }
}
