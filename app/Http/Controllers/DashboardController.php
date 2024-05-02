<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StravaController;
use App\Models\PhysicalActivity;
use App\Models\HealthData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function dashboardClient()
    {
        $user = auth()->user();
    
        $activities = PhysicalActivity::where('users_id', $user->id)->get();
        $healthData = HealthData::where('users_id', $user->id)->get()->last();
    
        $activities->transform(function ($activity) {
            $activity->date = Carbon::parse($activity->date)->format('d M Y');
            $activity->calories_burned = $activity->calculateCaloriesBurned();
            return $activity;
        });
        // Predictions
        $obesityPrediction = $this->predictObesity($healthData, $user); // Call prediction method
        // You can add prediction for calories as well if needed

        return view('dashboardClient', compact('activities', 'healthData', 'obesityPrediction'));
    }
    
    // Method to predict obesity
    private function predictObesity($healthData, $user)
    {
        // Prepare data for prediction
        $data = [
            'height' => $healthData->height,
            'weight' => $healthData->weight,
            'age' => now()->diffInYears($healthData->birthdate),
            'gender' => ($user->gender === 'male') ? 'M' : 'F',
            'activity_level' => 1, // Static for now, you can change it if needed
        ];

        // Send data to Flask for prediction
        $obesityPrediction = Http::post('http://localhost:5000/api/predict/obesity', $data)->json();
        // Extract only the predicted category from the response
        $predictedCategory = $obesityPrediction['predicted_category'] ?? null;
        // dd($predictedCategory);

        return $predictedCategory;
    }


    public function activityReport()
    {
        $currentMonth = now()->format('m');
        $currentYear = now()->format('Y');
    
        $user = auth()->user();
        $healthData = HealthData::where('users_id', $user->id)->get();
    
        // Format created_at dates
        $healthData->transform(function ($item) {
            $item->formatted_created_at = Carbon::parse($item->created_at)->format('d F Y');
            $item->time = Carbon::parse($item->created_at)->format('h:i A');
            return $item;
        });
    
        $activities = PhysicalActivity::whereYear('date', $currentYear)
            ->whereMonth('date', $currentMonth)
            ->where('users_id', $user->id)
            ->get();
    
        $totalSteps = $activities->sum('avg_steps');
        $totalDistance = $activities->sum('distance');
        $totalDuration = $activities->sum('duration');
    
        $totalSleepTime = $healthData->sum('sleeptime');
        if ($healthData->count() > 0) {
            $averageSleepTime = number_format($totalSleepTime / $healthData->count(), 2);
        } else {
            $averageSleepTime = 0; 
        }
    
        $latestHealthData = $healthData->last();
        if ($latestHealthData) {
            $height = $latestHealthData->height;
            $weight = $latestHealthData->weight;
            $birthdate = $latestHealthData->birthdate;
            $age = Carbon::parse($birthdate)->age;
        } else {
            $height = $user->height ?? 0;
            $weight = $user->weight ?? 0;
            $age = 0;
        }
        $gender = $user->gender === 'Male' ? 'M' : 'F';
    
        $response = Http::post('http://localhost:5000/api/predict/calorie', [
            'height' => $height,
            'weight' => $weight,
            'age' => $age,
            'gender' => $gender,
        ]);
        // dd($height, $weight, $age, $gender);
        $predictedCalories = ceil($response->json()['predicted_calories']);
    
        return view('activity-report',
            compact('totalSteps', 'totalDistance', 'totalDuration', 'averageSleepTime', 'healthData', 'activities', 'predictedCalories')
        );
    }
    

    public function consultation()
    {
        return view('health-data');
    }

    public function result()
    {
        return view('result');
    }
}