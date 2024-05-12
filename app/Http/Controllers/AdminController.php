<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HealthData;
use DB;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $userRoleCounts = User::groupBy('user_role')
            ->select('user_role', DB::raw('count(*) as count'))
            ->get();
    
        $doctorCount = User::where('user_role', 'doctor')->count();
        $patientCount = User::where('user_role', 'user')->count();
        $maleCount = User::where('user_role', 'user')->where('gender', 'Male')->count();
        $femaleCount = User::where('user_role', 'user')->where('gender', 'Female')->count();

        $normalCount = HealthData::where('obesity_status', 'Normal')->count();
        $obesityCount = HealthData::where('obesity_status', 'Obesity')->count();
    
        return view('dashboardAdmin',
        compact('userRoleCounts', 'doctorCount', 'patientCount', 'maleCount', 'femaleCount', 'normalCount', 'obesityCount'));
    }

    public function showDoctor(Request $request){
        return view('doctor-list', ["data" => User::where('user_role', 'doctor')->get()]);
    }

    public function showPatient(Request $request)
    {
        $data = User::where('user_role', 'user')->get();
        return view('patient-list')->with('data', $data);
    }

    public function showUserDetail($id){
        $data = User::find($id);
        return view('update-user', compact('data'));
    }

    public function updateData(Request $request, $id){
        $data = User::find($id);
        $data -> update($request -> all());
        return redirect()->route('showPatient');
    }

    public function delete($id){
        $data = User::find($id);
        $data -> delete();
        return redirect()->route('showPatient');
    }
}
