<?php

use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FullscreenMinimalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\PassengerTransportController;
use App\Http\Controllers\TruckingCorporateController;
use App\Http\Controllers\TruckingHomeSimpleController;
use App\Http\Controllers\TruckingParallaxSliderController;
use App\Http\Controllers\TruckingServicesController;
use App\Http\Controllers\TruckingServicesOverviewController;
use App\Http\Controllers\TruckingServicesSliderController;
use App\Http\Controllers\TruckingSimpleSliderController;
use App\Http\Controllers\TruckingVehicleFleetController;
use App\Http\Controllers\TruckingVideoSliderController;
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
Route::get('trucking-services', [TruckingServicesController::class , 'index'])->name('trucking-services.index');
Route::get('trucking-services-overview', [TruckingServicesOverviewController::class , 'index'])->name('trucking-services-overview.index');
Route::get('trucking-video-slider', [TruckingVideoSliderController::class , 'index'])->name('trucking-video-slider.index');
Route::get('trucking-home-simple', [TruckingHomeSimpleController::class , 'index'])->name('trucking-home-simple.index');
Route::get('trucking-services-slider', [TruckingServicesSliderController::class , 'index'])->name('trucking-services-slider.index');
Route::get('trucking-parallax-slider', [TruckingParallaxSliderController::class , 'index'])->name('trucking-parallax-slider.index');
Route::get('trucking-vehicle-fleet', [TruckingVehicleFleetController::class , 'index'])->name('trucking-vehicle-fleet.index');
Route::get('trucking-corporate', [TruckingCorporateController::class , 'index'])->name('trucking-corporate.index');
Route::get('trucking-simple-slider', [TruckingSimpleSliderController::class , 'index'])->name('trucking-simple-slider.index');
Route::get('fullscreen-minimal', [FullscreenMinimalController::class , 'index'])->name('fullscreen-minimal.index');


Route::get('about-simple', [AboutSimpleController::class , 'index'])->name('about-simple.index');
Route::get('about-compact', [AboutCompactController::class , 'index'])->name('about-compact.index');
Route::get('about-sidebar', [AboutSidebarController::class , 'index'])->name('about-sidebar.index');
Route::get('simple-page-title', [SimplePageTitleController::class , 'index'])->name('simple-page-title.index');
Route::get('company-history', [CompanyHistoryController::class , 'index'])->name('company-history.index');
Route::get('company-events', [CompanyEventsController::class , 'index'])->name('company-events.index');
Route::get('company-clients', [CompanyClientsController::class , 'index'])->name('company-clients.index');
Route::get('careers', [CareersController::class , 'index'])->name('careers.index');
Route::get('driver-application', [DriverApplicationController::class , 'index'])->name('driver-application.index');
