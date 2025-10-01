<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingHomeSimpleController extends Controller
{
    public function index()
    {
        return view('trucking-home-simple.index');
    }
}
