<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RailInternationalShippingController extends Controller
{
    public function index()
    {
        return view('logistic.rail-international-shipping.index');
    }
}
