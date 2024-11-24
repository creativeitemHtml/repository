<?php

use App\Http\Middleware\IsCustomer;
use App\Http\Middleware\IsSuperadmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__ . '/../routes/console.php',
        using: function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->group(base_path('routes/home.php'));

            Route::middleware('web')
                ->group(base_path('routes/superadmin.php'));

            Route::middleware('web')
                ->group(base_path('routes/customer.php'));

            Route::middleware('web')
                ->group(base_path('routes/element.php'));

            Route::middleware('web')
                ->group(base_path('routes/lms.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'superadmin' => IsSuperadmin::class,
            'customer'   => IsCustomer::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $exception, Request $request) {
            // if ($request->is(['admin', 'admin/*'])) {
            //     if ($exception->getStatusCode() == 400) {
            //         return response()->view("admin.errors.400", [], 400);
            //     }
            // }

            if ($exception->getStatusCode() == 400) {
                return response()->view("errors.400", [], 400);
            }

            if ($exception->getStatusCode() == 403) {
                return response()->view("errors.403", [], 403);
            }

            if ($exception->getStatusCode() == 404) {
                return response()->view("errors.404", [], 404);
            }

            if ($exception->getStatusCode() == 500) {
                return response()->view("errors.500", [], 500);
            }

            if ($exception->getStatusCode() == 503) {
                return response()->view("errors.503", [], 503);
            }
        });
    })->create();
