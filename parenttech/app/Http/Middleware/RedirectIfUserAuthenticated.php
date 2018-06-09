<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class RedirectIfUserAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard()->check()){
            return redirect('/home');
        }

        return $next($request);
    }
}
