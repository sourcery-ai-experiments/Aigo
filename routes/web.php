<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MqttController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalculationController;

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

Route::controller(DashboardController::class, '')->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class, '')->group(function(){
    Route::post('/login', 'login')->name('login');
    Route::get('/login', 'loginView')->name('loginView');

    Route::post('/register', 'register')->name('register');
    Route::get('/register', 'registerView')->name('registerView');
});

Route::controller(MqttController::class, '')->group(function(){
    Route::post('/publish', 'publishMessage')->name('publish');
    Route::get('/subscribe', 'subscribe')->name('subscribe');
});

Route::get('/calculate', [CalculationController::class, 'calculate'])->name('calculate');
