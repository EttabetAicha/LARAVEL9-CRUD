<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Agetest
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
        $age=8;
        if($age<18) return $next($request);
        else abort(403);
    }
}
