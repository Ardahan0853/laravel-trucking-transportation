<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagingOptionsController extends Controller
{
    public function index()
    {
        return view('services.packaging-options.index');
    }
}
