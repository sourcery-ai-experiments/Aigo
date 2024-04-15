<?php

namespace App\Http\Controllers;

use App\Models\HealthData;
use App\Models\JadwalKonsultasi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ConsultationController extends Controller
{
    public function showHealthDataForm()
    {
        $user = auth()->user();
        $healthData = HealthData::where('users_id', $user->id)->get()->last();
        return view('health-data', compact('healthData'));
    }

    public function storeHealthDataForm(Request $request)
    {
        $user = auth()->user();
        
        $data = HealthData::create(
            [
                'users_id' => $user->id,
                'birthdate' => Carbon::parse($request->input('birthdate'))->format('Y-m-d'),
                'weight' => $request->input('weight'),
                'height' => $request->input('height'),
                'sleeptime' => $request->input('sleeptime'),
                'disease' => $request->input('disease'),
                'food' => $request->input('food'),
            ]
        );
        return redirect()->route('jadwal.show');
        //return redirect()->route('result')->with('success', 'Health data updated successfully.');
    }


    public function showJadwalForm()
    {
        $user = auth()->user();
        $jadwal = JadwalKonsultasi::where('patient_id', $user->id)->first();

        return view('jadwal-konsultasi', compact('jadwal'));
    }

    
    
}   