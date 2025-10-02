<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsListController extends Controller
{
    public function index()
    {
        return view('news.news-list.index');
    }
}
