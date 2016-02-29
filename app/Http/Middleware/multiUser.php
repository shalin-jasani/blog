<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;

class multiUser
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
        if(Auth::id()!=1)
        {
            return redirect('error');
        }

        return $next($request);
    }
}
