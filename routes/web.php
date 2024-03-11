<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MqttController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class, '')->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});


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

