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

    }

    public function getAgriculture()
    {

    }

    public function getWaste()
    {

    }

    public function getPassenger()
    {

    }
}
