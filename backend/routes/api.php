<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'auth',
], function ($router) {
    Route::get('/me', [AuthController::class, 'me']);
});


Route::group([
    'prefix' => 'user',
], function ($router) {
    Route::get('/showall', [UserController::class, 'showAll']);
});

Route::group([
    'prefix' => 'group',
], function ($router) {
    Route::get('/showall', [GroupController::class, 'showAll']);
    Route::post('/assign', [GroupController::class, 'assign']);
    Route::post('/unassign', [GroupController::class, 'unassign']);
});
