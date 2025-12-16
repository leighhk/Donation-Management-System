<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\RoleAdmin;
use App\Http\Middleware\RoleDonor;
use App\Http\Middleware\RoleFinanceStaff;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // REGISTER CUSTOM MIDDLEWARE ALIASES
        $middleware->alias([
            'admin' => RoleAdmin::class,
            'donor' => RoleDonor::class,
            'staff' => RoleFinanceStaff::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
