<?php

namespace App\Http\Middleware;

use Closure;

class RoleFinanceStaff
{
    public function handle($request, Closure $next)
    {
        if (session('role') !== 'Finance Staff') {
            return redirect('/auth/login')->with('error', 'Unauthorized');
        }

        return $next($request);
    }
}
