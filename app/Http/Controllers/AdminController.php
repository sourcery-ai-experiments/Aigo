<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request){
        try{
            $referer = $request->server('HTTP_REFERER');
            //\Log::info(explode("/", $referer));
            if (explode("/", $referer)[3] !== "login") {
                return redirect()->route('login');
            }
            return view('admin-dashboard', ["data" => User::all()]);
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }

}
