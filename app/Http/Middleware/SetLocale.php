<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Illuminate\Support\Facades\URL;

class SetLocale
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
        if(Session::has('locale')){
            app()->setLocale(Session::get('locale'));
            
        }
        return $next($request);
    }
}
