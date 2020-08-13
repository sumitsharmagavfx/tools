<?php

namespace App\Http\Middleware;

use Closure;

class ManualAuth
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
        if (env('APP_ENV','local')=='development'){
            if (session()->exists('logged_in')){
                if (session('logged_in')===false){
                    return edirect('/login');
                }else{
                    return $next($request);
                }
            }else{
                return redirect('/login');
            }
        }else{
            return $next($request);
        }
    }
}
