<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // if(Auth::user()->role =="admin") {
        //     dd('mercisss');
        //     return redirect()->route('admin');
        //   // return redirect()->route('admin');
        //     return $next($request);
        // } elseif(Auth::user()->role =="user") {
        //     dd("user");
        //     return redirect()->route('home');
        // }

        // return $next($request);


    }
}
