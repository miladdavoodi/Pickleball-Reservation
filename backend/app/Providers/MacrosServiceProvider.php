<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class MacrosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Response::macro('success', function ($success, $message, $data) {
            return response()->json([
                'success' => $success,
                'message' => $message,
                'data' => $data,
            ]);
        });
        Response::macro('error', function ($success, $message, $errorCode) {
            return response()->json([
                'success' => $success,
                'message' => $message
            ], $errorCode);
        });
        Response::macro('validation_error', function ($success, $message, $errors, $errorCode = 422) {
            return response()->json([
                'success'    => $success,
                'message' => $message,
                'errors' => $errors,
            ], $errorCode);
        });
        Response::macro('login_success', function ($success, $message, $token) {
            $data = [
                'token' => $token,
                'user' => auth()->user(),
            ];
            return response()->json([
                'success' => $success,
                'message' => $message,
                'data' => $data,
            ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
