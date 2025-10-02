<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyClientsController extends Controller
{
    public function index()
    {
        return view('company-clients.index');
    }
}
