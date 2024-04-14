<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StravaController;
use App\Models\PhysicalActivity;
use App\Models\HealthData;
use Carbon\Carbon;

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
        return view('dashboardClient', compact('activities', 'healthData'));
    }

    public function activityReport()
    {
        $currentMonth = now()->format('m');
        $currentYear = now()->format('Y');
    
        $healthData = HealthData::where('users_id', auth()->user()->id)->get();
    
        // Format created_at dates
        $healthData->transform(function ($item) {
            $item->formatted_created_at = Carbon::parse($item->created_at)->format('d F Y');
            $item->time = Carbon::parse($item->created_at)->format('h:i A');
            return $item;
        });
    
        $activities = PhysicalActivity::whereYear('date', $currentYear)
            ->whereMonth('date', $currentMonth)
            ->where('users_id', auth()->user()->id)
            ->get();
    
        $totalSteps = $activities->sum('avg_steps');
        $totalDistance = $activities->sum('distance');
        $totalDuration = $activities->sum('duration');
    
        $totalSleepTime = $healthData->sum('sleeptime');
        if ($healthData->count() > 0) {
            $averageSleepTime = number_format($totalSleepTime / $healthData->count(), 2);
        } else {
            $averageSleepTime = 0; // Handle the case when there's no sleep data for the month
        }
    
        return view('activity-report', compact('totalSteps', 'totalDistance', 'totalDuration', 'averageSleepTime', 'healthData', 'activities'));
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