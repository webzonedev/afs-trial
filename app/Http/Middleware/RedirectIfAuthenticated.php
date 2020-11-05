<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            if(Auth::user()->profile_type=='App\Admin'){
                return redirect('/admin');
            }
            else  if(Auth::user()->profile_type=='App\Client'){
                return redirect('/client');
            }

            else  if(Auth::user()->profile_type=='App\Employee'){
                return redirect('/employee');
            }
            
        }

        return $next($request);
    }
}
