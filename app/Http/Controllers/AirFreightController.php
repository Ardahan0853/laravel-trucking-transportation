<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirFreightController extends Controller
{
    public function index()
    {
        return view('services.logistics.air-freight.index');
    }
}
