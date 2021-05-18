<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle(Request $request, Closure $next, ... $roles){
        if (! Auth::check()) {
            return redirect()->route('login');
        }
    $user = Auth::user();
    if (Auth::user()->role == 1) {
        return $next($request);
    }
    abort(403);
  }
}