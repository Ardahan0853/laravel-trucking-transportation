<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingServicesController extends Controller
{
    public function index()
    {
        return view('trucking-services-home.index');
    }
}
