<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StravaController;

class DashboardController extends Controller
{
    public function dashboardClient()
    {
        $stravaController = new StravaController();
        $activities = $stravaController->fetchAthleteActivities();
    
        if (is_array($activities)) {
            return view('dashboardClient', compact('activities'));
        } else {
            return $activities; // Redirect to login if access token is missing
        }
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