<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingMiddleware
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
        $request->attributes->add([
            'system_title' =>  Setting::where('field','system_title')->pluck('value')->first(),
            'header_logo' =>  Setting::where('field','header-logo')->pluck('value')->first(),
            'mother_company' =>  Setting::where('field','mother_company')->pluck('value')->first(),
            'favicon' =>  Setting::where('field','favicon')->pluck('value')->first(),
            'powered_by' =>  Setting::where('field','powered_by')->pluck('value')->first(),
            
        ]);

        return $next($request);
    }
}
