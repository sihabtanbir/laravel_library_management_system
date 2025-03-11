<?php

use Illuminate\Routing\Router;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        
        function(Router $router){
            $router->middleware('web')
                    ->group(base_path('routes/web.php'));

            $router->middleware('student')
                    ->group(base_path('routes/student.php'));

            $router->middleware('web')
                    ->group(base_path('routes/book.php'));
        },

        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'student' =>  App\Http\Middleware\studentMiddleware::class,
            'auth' =>  App\Http\Middleware\userMiddleware::class,
           
        ]);
       
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
