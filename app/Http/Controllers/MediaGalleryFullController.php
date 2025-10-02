<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaGalleryFullController extends Controller
{
    public function index()
    {
        return view('media.vehicle-gallery-full.index');
    }
}
