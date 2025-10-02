<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultingServicesController extends Controller
{
    public function index()
    {
        return view('services.consulting-services.index');
    }
}
