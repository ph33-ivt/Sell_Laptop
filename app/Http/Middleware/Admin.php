<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role;

class Admin
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
        if (Auth::user() && Auth::user()->can('isAdmin')) {
            return $next($request);
        }else
        {
         return redirect()->route('index');
        }

    }
}
