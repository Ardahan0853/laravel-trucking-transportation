<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyHistoryController extends Controller
{
    public function index()
    {
        return view('company-history.index');
    }
}
