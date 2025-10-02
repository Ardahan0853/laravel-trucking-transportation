<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsMasonryController extends Controller
{
    public function index()
    {
        return view('news.news-masonry.index');
    }
}
