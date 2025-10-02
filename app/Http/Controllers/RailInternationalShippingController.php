<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RailInternationalShippingController extends Controller
{
    public function index()
    {
        return view('services.logistics.rail-international-shipping.index');
    }
}
