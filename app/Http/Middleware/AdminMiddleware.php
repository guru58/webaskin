<?php

/*
   @author Gagandeep<deepguru649@gmail.com>
   @copyright 2017 Copyright 
*/
   
namespace App\Http\Middleware;

use Closure;
use Sentinel; 

class AdminMiddleware
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
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin'){
            return $next($request);   
        }
        else
            return redirect('/');
    }
}
