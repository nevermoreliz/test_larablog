<?php

namespace App\Exceptions;

use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponse;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // dd($exception);
        // echo env('APP_ENV');

        // if (env('APP_ENV') == 'local') {
        //     return parent::render($request, $exception);
        // }

        if ($exception instanceof NotFoundHttpException) {
            return $this->errorResponse('pagina no encontrada', 404, 'pagina no encontrada');
        }

        if ($exception instanceof ModelNotFoundException) {
            return $this->errorResponse('Recurso no encontrado', 404, 'Recurso no encontrado');
        }

        return parent::render($request, $exception);
    }

}
