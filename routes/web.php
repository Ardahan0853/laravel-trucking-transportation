<?php

use App\Http\Controllers\LogisticController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/logistic', [LogisticController::class, 'index'])->name('logistic.index');
