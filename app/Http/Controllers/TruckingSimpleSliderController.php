<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingSimpleSliderController extends Controller
{
    public function index()
    {
        return view('trucking-simple-slider.index');
    }
}
