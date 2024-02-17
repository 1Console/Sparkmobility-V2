<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnerAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard2', function () {
    return view('auth.dashboard');
});

Route::get('/commands/create', function () {
    return view('modules.commands.create'); //resources
});

// Route::get('/fleets/create', function () {
//     return view('modules.commands.create'); //resources
// });

// Route::get('/fleets/index', function () {
//     return view('modules.fleets.create'); //resources
// });




// default routes below
// default routes
// default routes
// default routes
// default routes
// default routes
// default routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




// //////MAIN ROUTES
// //////MAIN ROUTES
// //////MAIN ROUTES
// //////MAIN ROUTES
// Route::middleware('auth')->group( function(){  
    
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::middleware('verified')->group(function(){
//         Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
//     });

//     Route::get('/partner-admins/filterPartnerAdmin/{admin_type}',[PartnerAdminController::class,'filterPartnerAdmin'])->name('filterPartnerAdmin');
//     Route::resource('partner-admins',PartnerAdminController::class);
//     // Route::resource('admin-roles',AdminRoleController::class);
//     Route::get('/trekk-admins/filterTrekkAdmin/{admin_type}',[TrekkAdminController::class,'filterTrekkAdmin'])->name('filterTrekkAdmin');
//     Route::resource('trekk-admins',TrekkAdminController::class);

    
//     Route::get('fleets/{fleet}/assign-vehicles',[FleetController::class,'createAssignVehicles'])->name('fleets.create.assign-vehicles');
//     Route::post('fleets/{fleet}/assign-vehicles/',[FleetController::class,'storeAssignVehicles'])->name('fleets.store.assign-vehicles');
//     Route::resource('fleets',FleetController::class);

//     Route::get('vehicles/batch-create',[VehicleController::class,'batchCreateVehicle'])->name('vehicles.create.batch');
//     Route::post('vehicles/batch-store',[VehicleController::class,'batchStoreVehicle'])->name('vehicles.store.batch');
//     Route::resource('vehicles',VehicleController::class);

//     Route::resource('commands',CommandController::class);
//     Route::resource('pricing-plans',PricingController::class);
//     Route::resource('riders',RiderController::class);

//     Route::name('promos.')->prefix('promos')->group(function(){
//         Route::resource('wallet-credit',PromoWalletCreditController::class);
//         Route::resource('refer-friend',PromoReferFriendController::class);
//         Route::resource('percentage-discount',PromoPercentageDiscountController::class);
//         Route::resource('free-rides',PromoFreeRideController::class);
//         Route::resource('free-pass',PromoFreePassController::class);
//         Route::resource('flat-discount',PromoFlatDiscountController::class);
//     });

//     Route::name('marketing.')->prefix('marketing')->group(function(){
//         Route::resource('banners',BannerController::class);
//         Route::resource('offers',OfferController::class);
//         Route::resource('campaigns',CampaignController::class);            
//     });      
//  });

require __DIR__.'/auth.php';
