<?php

namespace App\Http;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class Kernel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    protected $routeMiddleware = [
        // ...
        'auth:admin' => \App\Http\Middleware\CheckAdmin::class,
        'auth:teacher' => \App\Http\Middleware\CheckTeacher::class,
        'auth:student' => \App\Http\Middleware\CheckStudent::class,
    ];

    protected $middleware = [
        // ...
        \Illuminate\Auth\Middleware\Authenticate::class,
        // ...
        \App\Http\Kernel::class,
        VerifyCsrfToken::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // ...
        ],
    ];
}
