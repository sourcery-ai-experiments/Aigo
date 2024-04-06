<?php

namespace App\Http\Controllers;

use App\Models\HealthData;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HealthDataController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();
        
        $data = HealthData::updateOrCreate(
            ['users_id' => $user->id],
            [
                'birthdate' => Carbon::parse($request->input('birthdate'))->format('Y-m-d'),
                'weight' => $request->input('weight'),
                'height' => $request->input('height'),
                'sleeptime' => $request->input('sleeptime'),
                'disease' => $request->input('disease'),
                'food' => $request->input('food'),
            ]
        );
    
        return redirect()->route('result')->with('success', 'Health data updated successfully.');
    }

    public function showHealthDataForm()
    {
        $user = auth()->user();
        $healthData = HealthData::where('users_id', $user->id)->first();

        return view('health-data', compact('healthData'));
    }
}   