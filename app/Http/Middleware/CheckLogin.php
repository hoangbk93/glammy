<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class CheckLogin
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
        if (Auth::check()) {
            # code...
            return redirect('admin/dashboard');
        }
        return $next($request);
    }
}
