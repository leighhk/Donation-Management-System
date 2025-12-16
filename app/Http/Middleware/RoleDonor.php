<?php

namespace App\Http\Middleware;

use Closure;

class RoleDonor
{
    public function handle($request, Closure $next)
    {
        if (session('role') !== 'Donor') {
            return redirect('/auth/login')->with('error', 'Unauthorized');
        }

        return $next($request);
    }
}
