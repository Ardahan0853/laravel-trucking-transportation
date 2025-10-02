<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverApplicationController extends Controller
{
    public function index()
    {
        return view('driver-application.index');
    }
}
