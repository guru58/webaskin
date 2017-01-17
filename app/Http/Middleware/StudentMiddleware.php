<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Alert;
class StudentMiddleware
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
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'student')

        return $next($request);
        else 
            Alert::error('You must log in first' , 'Oops!');
            return redirect('/');
    }
}
