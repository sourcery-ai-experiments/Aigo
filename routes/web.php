<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Consultation;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\StravaController;
use App\Http\Controllers\Api\HealthDataAPIController;
use App\Http\Controllers\Api\UserAPIController;
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



// 1. CLIENT PAGES
Route::group(['prefix' => 'client', 'middleware' => ['auth', 'verified']], function () {
    // DASHBOARD CONTROLLER
    Route::get('/dashboard', [DashboardController::class, 'dashboardClient'])->name('dashboard')->middleware('role');
    Route::get('/activity-report', [DashboardController::class, 'activityReport'])->name('activity-report');
    Route::get('/result', [DashboardController::class, 'result'])->name('result');

    // CONSULTATION CONTROLLER
    Route::get('/health-data', [ConsultationController::class, 'showHealthDataForm'])->name('health-data.show');
    Route::post('/health-data', [ConsultationController::class, 'storeHealthDataForm'])->name('health-data.store');
    Route::get('/jadwal', [ConsultationController::class, 'showJadwalForm'])->name('jadwal.show');
    Route::post('/consultation', [ConsultationController::class, 'storeConsultation'])->name('consultation.store');
});


// 2. ADMIN PAGES
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('role');
    Route::get('/admin/doctor-info', [AdminController::class, 'showDoctor'])->name('showDoctor');
    Route::get('/admin/patient-info', [AdminController::class, 'showPatient'])->name('showPatient');
    Route::get('/delete/user/{id}', [AdminController::class, 'delete'])->name('delete-user');
    Route::get('/user/{id}', [AdminController::class, 'showUserDetail'])->name('show-user');
    Route::post('/update/user/{id}', [AdminController::class, 'updateData'])->name('update-user');
});

// 3. DOCTOR PAGES
Route::group(['prefix' => 'doctor', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard')->middleware('role');

    Route::get('/patient-acceptance', [DoctorController::class, 'patientAcceptance'])->name('doctor.patient-acceptance');

    Route::get('/schedule', function () {
        return view('doctor-schedule');
    })->name('doctor.schedule');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->get('/api/current-user-id', function () {
    return response()->json(['user_id' => Auth::id()]);
});

Route::get('/user/{id}', [UserAPIController::class, 'getUser']);
Route::get('/health-data/{userId}', [HealthDataAPIController::class, 'getHealthData']);

require __DIR__.'/auth.php';
