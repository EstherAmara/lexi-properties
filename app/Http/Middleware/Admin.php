<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!(auth()->user()->isAdmin())) {
            Auth::guard()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('login')->with('errorAlert','You have to be an admin to continue');
        }
        
        return $next($request);
    }
}
