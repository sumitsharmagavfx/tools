<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
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
        if (session()->exists('local')){
            App::setLocale(session('local'));
        }else{
            session()->put('local','id');
            App::setLocale(session('local'));
        }
        return $next($request);
    }
}
