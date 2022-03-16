<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
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
       if (auth()->user()->user_type == 1) {
        return $next($request);
       }
       return redirect('login')->with('error', 'credentials invalid');
    }

        //  if (auth()->user()->has('adminId') && (auth()->user()->user_type == 1)) {
        //     return $next($request);
        // }else{
        //     return redirect('login');
        // }


}
