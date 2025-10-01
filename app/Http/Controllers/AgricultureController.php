<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgricultureController extends Controller
{
    public function index()
    {
        return view('agriculture.index');
    }
}
