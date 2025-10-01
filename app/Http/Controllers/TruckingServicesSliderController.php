<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingServicesSliderController extends Controller
{
    public function index()
    {
        return view('trucking-services-slider.index');
    }
}
