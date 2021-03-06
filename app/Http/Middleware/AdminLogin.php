<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
       
        if(session('uid')) {
            return $next($request);
        } else {
            return redirect('/admin/login')->with('err','请先登录!');
        }

    }

}
