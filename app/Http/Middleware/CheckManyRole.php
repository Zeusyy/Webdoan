<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckManyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role1,$role2)
    {
        $userRole = Auth::user()->role->name;
        if($userRole != $role1 && $userRole != $role2)
            return redirect()->route('home');
        return $next($request);
    }
}
