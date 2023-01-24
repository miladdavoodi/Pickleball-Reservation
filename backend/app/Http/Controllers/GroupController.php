<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AssignUnassignGroupRequest;

class GroupController extends Controller
{
    //show all
    /**
     *@OA\Get(
     * path="/api/group/showall",
     * tags={"Groups"},
     * summary="show all groups ",
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
        return Response::success(true, trans('messages.success'), Group::with(['users'])->get());
    }
    /**
     *@OA\Post(
     * path="/api/group/assign",
     * tags={"Groups"},
     * summary="add user to group",
     * @OA\Parameter(
     *    name="X-localization",
     *    in="header",
     *    description="localization",
     *    required=true,
     *    example="fa",
     * ),
     *  @OA\RequestBody(
     *    @OA\JsonContent(
     *       @OA\Property(property="user_id", example="1"),
     *       @OA\Property(property="group_id", example="1"),
     *    ),
     * ),
     *  @OA\Response(
     *      response=200,
     *      description="ok",
     *      @OA\JsonContent(),
     *  )
     * )
     */
    public function assign(AssignUnassignGroupRequest $request)
    {
        $group = Group::find($request->group_id);
        $group->attachUser($request->user_id);
        return Response::success(true, trans('messages.success'), $group->refresh());
    }
    /**
     *@OA\Post(
     * path="/api/group/unassign",
     * tags={"Groups"},
     * summary="add user to group",
     * @OA\Parameter(
     *    name="X-localization",
     *    in="header",
     *    description="localization",
     *    required=true,
     *    example="fa",
     * ),
     *  @OA\RequestBody(
     *    @OA\JsonContent(
     *       @OA\Property(property="user_id", example="1"),
     *       @OA\Property(property="group_id", example="1"),
     *    ),
     * ),
     *  @OA\Response(
     *      response=200,
     *      description="ok",
     *      @OA\JsonContent(),
     *  )
     * )
     */
    public function unassign(AssignUnassignGroupRequest $request)
    {
        $group = Group::find($request->group_id);
        $group->detachUser($request->user_id);
        return Response::success(true, trans('messages.success'), $group->load(['users']));
    }
}
