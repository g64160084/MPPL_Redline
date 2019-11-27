<?php

namespace App\Http\Middleware;

use Closure;

class Penyewa
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
        if(auth()->user()->status == 'penyewa' || auth()->user()->status == 'admin')
        {
            return $next($request);
        }
        return redirect('home')->with('error','Anda tidak mempunyai akses');
    }
}
