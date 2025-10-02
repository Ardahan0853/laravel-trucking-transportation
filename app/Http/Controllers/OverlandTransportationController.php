<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverlandTransportationController extends Controller
{
    public function index()
    {
        return view('services.logistics.overland-transportation.index');
    }
}
