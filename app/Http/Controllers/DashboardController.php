<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){

        try{
            $referer = $request->server('HTTP_REFERER');
            \Log::info(explode("/", $referer));
    
            if (explode("/", $referer)[3] !== "login") {
                return redirect()->route('login');
            }
            return view('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

    }
}
