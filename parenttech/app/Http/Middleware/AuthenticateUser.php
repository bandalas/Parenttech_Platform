<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateUser
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
        \Log::warning('its in handle!');

        if(! Auth::guard('web_admin')->check() && Auth::guard()->check())
        {
            \Log::warning('its in handle');
            return redirect('users.rip');
        }

        return $next($request);
    }
}
