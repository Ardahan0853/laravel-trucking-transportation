<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OceanFreightController extends Controller
{
    public function index()
    {
        return view('services.logistics.ocean-freight.index');
    }
}
