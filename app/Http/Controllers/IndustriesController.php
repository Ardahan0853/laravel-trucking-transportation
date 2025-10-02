<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function getLogistic()
    {
        return view('industries.logistic.index');
    }

    public function getConstruction()
    {
        return view('industries.construction.index');

    }

    public function getDelivery()
    {
        return view('industries.delivery-management.index');

    }

    public function getAgriculture()
    {
        return view('industries.agriculture.index');
    }

    public function getWaste()
    {
        return view('industries.waste-management.index');
    }

    public function getPassenger()
    {
        return view('industries.passenger-transport.index');
    }
}
