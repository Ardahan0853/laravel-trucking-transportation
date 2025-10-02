<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsSingleController extends Controller
{
    public function index()
    {
        return view('news.news-single.index');
    }
}
