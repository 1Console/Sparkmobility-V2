<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/riders-management', function () {
//     return Inertia::render('RidersManagement/RidersManagement');
// })->middleware(['auth', 'verified'])->name('riders-management');

// Almost there!
Route::middleware(['auth', 'verified'])->prefix('riders-management')->name('riders-management')->group(function () {

    // Route for /riders-management/riders-management
    Route::get('/riders-management', function () {
        return Inertia::render('RidersManagement/RidersManagement');
    });

    // Redirect /riders-management to /riders-management/riders-management
    Route::redirect('/', '/riders-management/riders-management');

    // Route for /rides-management/rides-management
    Route::get('/rides-management', function () {
        return Inertia::render('RidersManagement/RidesManagement');
    })->name('.rides-management');

    // Route for /riders-management/active-rides
    Route::get('/active-rides', function () {
        return Inertia::render('RidersManagement/ActiveRides');
    })->name('.active-rides');

    // Route for /riders-management/rides-transactions
    Route::get('/ride-transactions', function () {
        return Inertia::render('RidersManagement/RideTransactions');
    })->name('.ride-transactions');

    // Route for /riders-management/all-transactions
    Route::get('/all-transactions', function () {
        return Inertia::render('RidersManagement/AllTransactions');
    })->name('.all-transactions');
});

Route::get('/simulate-error', function () {
    // Simulate a 500 server error
    throw new Exception("This is a simulated error for testing purposes.");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
