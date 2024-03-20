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

    public function showData($id){
        $data = User::find($id);
        return view('admin.update-user', compact('data'));
    }

    public function updateData(Request $request, $id){
        $data = User::find($id);
        $data -> update($request -> all());
        return redirect()->route('view-users');
    }

    public function delete($id){
        $data = User::find($id);
        $data -> delete();
        return redirect()->route('dashboard');
    }
}
