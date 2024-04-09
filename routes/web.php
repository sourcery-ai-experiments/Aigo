<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HealthDataController;
use App\Http\Controllers\StravaController;
use App\Http\Middleware\RedirectBasedOnRole;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/strava/authorize', [StravaController::class, 'authorize'])->name('strava.authorize');
Route::get('/strava/callback', [StravaController::class, 'handleCallback'])->name('strava.callback');


Route::group(['prefix' => 'client', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardClient'])->name('dashboard')->middleware('role');;
    Route::get('/result', [DashboardController::class, 'result'])->name('result');
    Route::post('/health-data', [HealthDataController::class, 'store'])->name('health-data.store');
    Route::get('/consultation', [HealthDataController::class, 'showHealthDataForm'])->name('consultation');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/admin/doctor-info', [AdminController::class, 'showDoctor'])->name('admin.dashboard')->middleware('role');;
    Route::get('/admin/patient-info', [AdminController::class, 'showPatient'])->name('showPatient');
    Route::get('/delete/user/{id}', [AdminController::class, 'delete'])->name('delete-user');
    Route::get('/user/{id}', [AdminController::class, 'showData'])->name('show-user');
    Route::post('/update/user/{id}', [AdminController::class, 'updateData'])->name('update-user');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
