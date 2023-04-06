<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check())
        {
            //check role Admin==1 && user ==0
            if(auth()->user()->role == '1')
            {
                return $next($request);
            }
            else{
                return redirect('/')->with('message','Access denied');
            }
        }
        else{
            return redirect('/login')->with('message','Please login first');
        }
        return $next($request);
    }
}
