<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\Cache;


class ActorMiddleware
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
        if(Auth::user()->role == 'actor')
        {
            return $next($request);
        }
        return redirect('/home')->with('status', 'You are not allowed to Actor Dashboard');
    }
}
