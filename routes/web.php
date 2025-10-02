<?php

use App\Http\Controllers\AboutCompactController;
use App\Http\Controllers\AboutSidebarController;
use App\Http\Controllers\AboutSimpleController;
use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\AirFreightController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\CompanyClientsController;
use App\Http\Controllers\CompanyEventsController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\ConsultingServicesController;
use App\Http\Controllers\ContractLogisticsController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DriverApplicationController;
use App\Http\Controllers\FullscreenMinimalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LargeProjectsController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\LogisticsController;
use App\Http\Controllers\OceanFreightController;
use App\Http\Controllers\OverlandTransportationController;
use App\Http\Controllers\PackagingOptionsController;
use App\Http\Controllers\PassengerTransportController;
use App\Http\Controllers\RailInternationalShippingController;
use App\Http\Controllers\SimplePageTitleController;
use App\Http\Controllers\SupplyChainManagementController;
use App\Http\Controllers\TruckingCorporateController;
use App\Http\Controllers\TruckingHomeSimpleController;
use App\Http\Controllers\TruckingParallaxSliderController;
use App\Http\Controllers\TruckingServicesController;
use App\Http\Controllers\TruckingServicesOverviewController;
use App\Http\Controllers\TruckingServicesSliderController;
use App\Http\Controllers\TruckingSimpleSliderController;
use App\Http\Controllers\TruckingVehicleFleetController;
use App\Http\Controllers\TruckingVideoSliderController;
use App\Http\Controllers\WarehousingController;
use App\Http\Controllers\WasteManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('logistic', [LogisticController::class, 'index'])->name('logistic.index');
Route::get('construction', [ConstructionController::class, 'index'])->name('construction.index');
Route::get('delivery-management', [DeliveryController::class, 'index'])->name('delivery-management.index');
Route::get('agriculture', [AgricultureController::class, 'index'])->name('agriculture.index');
Route::get('waste-management', [WasteManagementController::class, 'index'])->name('waste-management.index');
Route::get('passenger-transport', [PassengerTransportController::class, 'index'])->name('passenger-transport.index');
Route::get('trucking-services', [TruckingServicesController::class, 'index'])->name('trucking-services.index');
Route::get('trucking-services-overview', [TruckingServicesOverviewController::class, 'index'])->name('trucking-services-overview.index');
Route::get('trucking-video-slider', [TruckingVideoSliderController::class, 'index'])->name('trucking-video-slider.index');
Route::get('trucking-home-simple', [TruckingHomeSimpleController::class, 'index'])->name('trucking-home-simple.index');
Route::get('trucking-services-slider', [TruckingServicesSliderController::class, 'index'])->name('trucking-services-slider.index');
Route::get('trucking-parallax-slider', [TruckingParallaxSliderController::class, 'index'])->name('trucking-parallax-slider.index');
Route::get('trucking-vehicle-fleet', [TruckingVehicleFleetController::class, 'index'])->name('trucking-vehicle-fleet.index');
Route::get('trucking-corporate', [TruckingCorporateController::class, 'index'])->name('trucking-corporate.index');
Route::get('trucking-simple-slider', [TruckingSimpleSliderController::class, 'index'])->name('trucking-simple-slider.index');
Route::get('fullscreen-minimal', [FullscreenMinimalController::class, 'index'])->name('fullscreen-minimal.index');


Route::get('about-simple', [AboutSimpleController::class, 'index'])->name('about-simple.index');
Route::get('about-compact', [AboutCompactController::class, 'index'])->name('about-compact.index');
Route::get('about-sidebar', [AboutSidebarController::class, 'index'])->name('about-sidebar.index');
Route::get('simple-page-title', [SimplePageTitleController::class, 'index'])->name('simple-page-title.index');
Route::get('company-history', [CompanyHistoryController::class, 'index'])->name('company-history.index');
Route::get('company-events', [CompanyEventsController::class, 'index'])->name('company-events.index');
Route::get('company-clients', [CompanyClientsController::class, 'index'])->name('company-clients.index');
Route::get('careers', [CareersController::class, 'index'])->name('careers.index');
Route::get('driver-application', [DriverApplicationController::class, 'index'])->name('driver-application.index');


//Route::get('services-overview', [ServicesOverviewController::class, 'index'])->name('services-overview.index');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('logistics', [LogisticsController::class, 'index'])->name('logistics.index');
    Route::get('warehousing', [WarehousingController::class, 'index'])->name('warehousing.index');
    Route::get('supply-chain-management', [SupplyChainManagementController::class, 'index'])->name('supply-chain-management.index');
    Route::get('packaging-options', [PackagingOptionsController::class, 'index'])->name('packaging-options.index');
    Route::get('consulting-services', [ConsultingServicesController::class, 'index'])->name('consulting-services.index');
    Route::prefix('logistics')->name('logistics.')->group(function () {
        Route::get('/', [LogisticsController::class, 'index'])->name('index');
        Route::get('overland-transportation', [OverlandTransportationController::class, 'index'])->name('overland-transportation.index');
        Route::get('air-freight', [AirFreightController::class, 'index'])->name('air-freight.index');
        Route::get('ocean-freight', [OceanFreightController::class, 'index'])->name('ocean-freight.index');
        Route::get('large-projects', [LargeProjectsController::class, 'index'])->name('large-projects.index');
        Route::get('rail-international-shipping', [RailInternationalShippingController::class, 'index'])->name('rail-international-shipping.index');
        Route::get('contract-logistics', [ContractLogisticsController::class, 'index'])->name('contract-logistics.index');
    });
});

// SERVICES → LOGISTICS dropdown

