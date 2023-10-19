<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResidentController;

use Illuminate\Support\Facades\Route;

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

Route::controller(GuestController::class)->group(function () {
    Route::get('/ordinances', 'ordinance')->name('guest.ordinance');
    Route::get('/resolutions', 'resolution')->name('guest.resolution');
    Route::get('/reports', 'report')->name('guest.report');
    Route::get('/committee', 'committee')->name('guest.committee');

});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-dashboard', 'dashboard')->name('admin.dashboard');
});

Route::controller(ResidentController::class)->group(function () {
    Route::get('/barangay-clearance', 'requestClearance')->name('resident.clearance');
    Route::get('/barangay-oath', 'requestOath')->name('resident.oath');
    Route::get('/barangay-certificate', 'requestCertificate')->name('resident.certificate');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
