<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function loginView(){
        return view('login');
    }

    public function registerView(){
        return view('register');
    }

    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials, $request->has('remember_me'))) {
            $user = Auth::user();
            switch ($user->user_role) {
                case 'admin':
                    return redirect()->route('dashboard');
                    break;
                case 'user':
                    return redirect()->route('homepage');
                    break;
                case 'doctor':
                    return redirect()->route('home');
                    break;
                default:
                    return redirect('/');
            }
        }
        return back()->with('loginError', 'Username atau Password salah!');
    }
    

    public function register(Request $request)
    {
        $this->validate($request, [
            'user_role' => 'required|string',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|confirmed',
            'nama' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'telepon' => 'required|string',
            'alamat' => 'string',
            'gender' => 'required|string',
        ]);

        $user = User::create([
            'user_role' => $request->user_role,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
        ]);

        return redirect()->route('login');
    }
}
