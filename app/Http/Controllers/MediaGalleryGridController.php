<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaGalleryGridController extends Controller
{
    public function index()
    {
        return view('media.vehicle-gallery-grid.index');
    }
}
