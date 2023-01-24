<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    //show all
    /**
     *@OA\Get(
     * path="/api/user/showall",
     * tags={"Users"},
     * summary="show all users ",
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
    public function showAll()
    {
        return Response::success(true, trans('messages.success'), User::get());
    }
}
