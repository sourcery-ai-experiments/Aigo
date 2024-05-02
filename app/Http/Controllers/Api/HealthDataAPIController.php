<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HealthData;
use Illuminate\Http\Request;

class HealthDataAPIController extends Controller
{
    public function getHealthData($userId)
    {
        $healthData = HealthData::where('users_id', $userId)->first();

        if (!$healthData) {
            return response()->json(['error' => 'Health data not found'], 404);
        }

        return response()->json($healthData);
    }
}