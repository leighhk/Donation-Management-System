<?php

namespace App\Http\Middleware;

use Closure;

class RoleAdmin
{
    public function handle($request, Closure $next)
    {
        if (session('role') !== 'Admin') {
            return redirect('/auth/login')->with('error', 'Unauthorized');
        }

        return $next($request);
    }
}
