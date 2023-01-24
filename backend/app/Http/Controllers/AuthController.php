<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    //me
    /**
     *@OA\Get(
     * path="/api/auth/me",
     * tags={"Auth"},
     * summary="show user with token",
     * @OA\Parameter(
     *    name="X-localization",
     *    in="header",
     *    description="localization",
     *    required=true,
     *    example="en",
     * ),
     *  @OA\Response(
     *      response=200,
     *      description="ok",
     *      @OA\JsonContent(),
     *  )
     * )
     */
    public function me()
    {
        return Response::success(true, trans('messages.success'), User::find(1));
    }
}
