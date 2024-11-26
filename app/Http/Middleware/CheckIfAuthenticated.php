<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfAuthenticated
{

    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.signIn');
        }

        return $next($request);
    }


}
