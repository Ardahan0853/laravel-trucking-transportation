<?php

use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\PassengerTransportController;
use App\Http\Controllers\TruckingServicesController;
use App\Http\Controllers\WasteManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('logistic', [LogisticController::class, 'index'])->name('logistic.index');
Route::get('construction', [ConstructionController::class, 'index'])->name('construction.index');
Route::get('delivery-management', [DeliveryController::class, 'index'])->name('delivery-management.index');
Route::get('agriculture', [AgricultureController::class , 'index'])->name('agriculture.index');
Route::get('waste-management', [WasteManagementController::class , 'index'])->name('waste-management.index');
Route::get('passenger-transport', [PassengerTransportController::class , 'index'])->name('passenger-transport.index');
Route::get('trucking-services', [TruckingServicesController::class , 'index'])->name('tracking-services.index');

