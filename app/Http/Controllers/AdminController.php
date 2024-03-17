<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request){
        return view('dashboard', ["data" => User::all()]);
    }
}
