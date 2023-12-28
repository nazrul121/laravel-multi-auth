<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyAdminMiddleware
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
       
        check_login();
        if (Auth::check()) {
            $access = Auth::user()->accesses()->where('status','1')->where('access_id','2');
            if($access->count() > 0) return $next($request);
            else abort(403);
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
