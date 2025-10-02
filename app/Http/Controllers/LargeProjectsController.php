<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LargeProjectsController extends Controller
{
    public function index()
    {
        return view('logistic.large-projects.index');
    }
}
