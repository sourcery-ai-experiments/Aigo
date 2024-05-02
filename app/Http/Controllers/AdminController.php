<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        return view('dashboardAdmin', ["data" => User::where('user_role', 'doctor')->get()]);
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
