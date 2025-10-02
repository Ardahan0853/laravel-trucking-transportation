<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimplePageTitleController extends Controller
{
    public function index()
    {
        return view('simple-page-title.index');
    }
}
