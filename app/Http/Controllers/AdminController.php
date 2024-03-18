<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function showDoctor(Request $request){
        return view('dashboard', ["data" => User::where('user_role', 'doctor')->get()]);
    }

    public function showPatient(Request $request){
        return view('dashboard', ["data" => User::where('user_role', 'user')->get()]);
    }
}
