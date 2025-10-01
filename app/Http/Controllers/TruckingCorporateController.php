<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingCorporateController extends Controller
{
    public function index()
    {
        return view('trucking-corporate.index');
    }
}
