<?php

namespace App\Http\Middleware;

use Closure;

class CheckMonth
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
        if($request->month < 1 || $request->month > 12){
            return redirect()->route('income.index');
        }
        return $next($request);
    }
}
