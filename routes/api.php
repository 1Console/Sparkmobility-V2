<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\RiderAuthController;
use App\Http\Controllers\Api\Riders\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/', function (Request $request) {
// return $request->user();
Route::post('/rider/dashboard',[DashboardController::class,'index'])->name('rider.dashboard')->middleware('auth:sanctum');
// });



//MOBILE APP - CLEAN UP LATER
Route::post('/rider/login',[RiderAuthController::class,'login'])->name('auth.rider.login');
Route::post('/rider/logout',[RiderAuthController::class,'logout'])->name('auth.rider.logout');
Route::post('/rider/register',[RiderAuthController::class,'register'])->name('auth.rider.register');
