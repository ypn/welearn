<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

use Closure;

class CheckLocale
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
        $locale = Cookie::get('lang');
        if($locale!=null){
            App::setLocale($locale);
        }
        return $next($request);
    }
}
