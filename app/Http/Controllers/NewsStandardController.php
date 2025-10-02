<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsStandardController extends Controller
{
    public function index()
    {
        return view('news.news-standard.index');
    }
}
