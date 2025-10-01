<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingVehicleFleetController extends Controller
{
    public function index()
    {
        return view('trucking-vehicle-fleet.index');
    }
}
