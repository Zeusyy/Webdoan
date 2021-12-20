<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
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
        if(Auth::user()->role->name == 'admin')
            return $next($request);
        else
        {
            //get User id from URL
            $id = $request->route('user')->id;
            if (Auth::user()->id != $id) {
                return redirect()->route('users.edit',Auth::user()->id);
            }

            return $next($request);
        }
    }
}
