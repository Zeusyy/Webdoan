<?php

namespace App\Http\Middleware;

use Closure;

class CheckYear
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
        if($request->year < 2021){
            return redirect()->route('income.index');
        }
        return $next($request);
    }
}
