<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class is_admin
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
        if (Auth::user()->permission == 1) {
            return $next($request);
        }

        return redirect('home')->with('error',"You don't have admin access.");
    }
}
