<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingServicesOverviewController extends Controller
{
    public function index()
    {
        return view('trucking-services-overview.index');
    }
}
