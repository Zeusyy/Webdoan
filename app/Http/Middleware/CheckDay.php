<?php

namespace App\Http\Middleware;

use Closure;

class CheckDay
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
        $day    = $request->day;
        $month  = $request->month;
        $year   = $request->year;
        if(!checkdate($month, $day, $year)){
            return redirect()->route('income.index');
        }
        return $next($request);
    }
}
