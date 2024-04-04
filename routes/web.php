<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'client'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardClient'])->name('dashboardClient');
    Route::get('/consultation', [DashboardController::class, 'consultation'])->name('consultation');
    Route::get('/result', [DashboardController::class, 'result'])->name('result');
});

Route::controller(AdminController::class, '')->group(function(){
    //Route::get('/admin/dashboard', 'index')->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/admin/doctor-info', 'showDoctor')->middleware(['auth', 'verified'])->name('dashboard');//->name('showDoctor');
    Route::get('/admin/patient-info', 'showPatient')->middleware(['auth', 'verified'])->name('showPatient');
    Route::get('/delete/user/{id}', 'delete')->name('delete-user');
    Route::get('/user/{id}', 'showData')->name('show-user');
    Route::post('/update/user/{id}', 'updateData')->name('update-user');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
