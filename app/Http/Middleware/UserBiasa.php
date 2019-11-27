<?php

namespace App\Http\Middleware;

use Closure;

class UserBiasa
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
        if(auth()->user()->status == 'user')
        {
            return $next($request);
        }
        return redirect('home')->with('error','Anda sudah Penyewa/Admin');
    }
}
