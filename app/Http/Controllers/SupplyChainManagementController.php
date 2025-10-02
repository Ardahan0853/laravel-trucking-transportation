<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyChainManagementController extends Controller
{
    public function index()
    {
        return view('services.supply-chain-management.index');
    }
}
