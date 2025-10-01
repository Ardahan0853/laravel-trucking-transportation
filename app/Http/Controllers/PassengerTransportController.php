<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassengerTransportController extends Controller
{
    public function index()
    {
        return view('passenger-transport.index');
    }
}
