<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
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
    public function render($request, Throwable $e)
    {
        switch (get_class($e)) {
            case "Illuminate\Database\Eloquent\ModelNotFoundException":
                return Response::error(false, trans('messages.bad_request'), 400);
                break;
            case "Illuminate\Auth\AuthenticationException":
                return Response::error(false, trans('auth.failed'), 401);
                break;
            case "Illuminate\Validation\ValidationException":
                return Response::validation_error(false, trans('validation.validation_error'), $e->errors(), $e->status);
                break;
            case "Illuminate\Auth\Access\AuthorizationException":
                return Response::error(false, trans('messages.permissionsDenied'), 400);
            case "Laravel\Passport\Exceptions\MissingScopeException":
                return Response::error(false, trans('messages.2faFail'), 400);
            default:
                //return Response::error(false, trans('messages.error'), 400);
                return parent::render($request, $e);
        }
    }
}
