<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingVideoSliderController extends Controller
{
    public function index()
    {
        return view('trucking-video-slider.index');
    }
}
