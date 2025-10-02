<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutSidebarController extends Controller
{
    public function index()
    {
        return view('about-sidebar.index');
    }
}
