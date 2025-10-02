<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractLogisticsController extends Controller
{
    public function index()
    {
        return view('services.logistics.contract-logistics.index');
    }
}
