<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutCompactController extends Controller
{
    public function index()
    {
        return view('about-compact.index');
    }
}
