<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->user_role == 'user') {
                if ($request->route()->getName() !== 'dashboard') {
                    return redirect()->route('dashboard');
                }
            } elseif ($user->user_role == 'doctor') {
                // redirect to doctor dashboard (TODO)
                // if ($request->route()->getName() !== 'doctor.dashboard') {
                //     return redirect()->route('doctor.dashboard');
                // }
            } elseif ($user->user_role == 'admin') {
                if ($request->route()->getName() !== 'admin.dashboard') {
                    return redirect()->route('admin.dashboard');
                }
            }
        }
    
        return $next($request);
    }
}
