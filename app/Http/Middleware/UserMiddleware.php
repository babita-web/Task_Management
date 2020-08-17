<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class UserMiddleware
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

        if (Auth::check())
        {
            $expirseAt = Carbon::now()->addMinutes(2);
            Cache::put('user-is-active' . Auth::user()->id, true, $expirseAt);
        }
        return $next($request);

    }

}
