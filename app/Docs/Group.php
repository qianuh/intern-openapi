<?php

namespace App\Docs;

/**
	@OA\Tag(
		name="Group",
		description="User群組相關操作",
	)

PATH: GET /group
	@OA\Get(
        path="/group",
        operationId="getGroups",
        tags={"Group"},
        summary="get groups",
        description="get groups",
        security={{"bearerAuth":{}}},
        @OA\Response(
            response=200,
            description="success get on webform",
        ),
        @OA\Response(
            response=403,
            description="Unauthenticated"
        ),
        @OA\Response(
            response=404,
            description="Account no permission"
        )
    )


PATH: GET /group/{id}
	@OA\Get(
        path="/group/{id}",
        operationId="getGroupId",
        tags={"Group"},
        summary="get group id",
        description="get group id",
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="id",
            description="specific webform id",
            required=true,
            in="path",
            @OA\Schema(type="integer")
        ),
        @OA\Response(
            response=200,
            description="success get on webform",
        ),
        @OA\Response(
            response=403,
            description="Unauthenticated"
        ),
        @OA\Response(
            response=404,
            description="Account no permission"
        )
    )


PATH: POST /group
	@OA\Post(
        path="/group",
        operationId="postGroup",
        tags={"Group"},
        summary="create group",
        description="Returns list of webform",
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="name",
            description="name",
            required=true,
            in="query",
            @OA\Schema(type="string")
        ),
        @OA\Parameter(
            name="note",
            description="note",
            in="query",
            @OA\Schema(type="string")
        ),
        @OA\Response(
            response=200,
            description="Successful operation",
        ),
        @OA\Response(
            response=403,
            description="Unauthenticated",
        ),
        @OA\Response(
            response=404,
            description="Role already exist",
        ),        
        @OA\Response(
            response=422,
            description="Parameter validation failed",
        ),               
        @OA\Response(
            response=500,
            description="SQL Execution Error",
        )
    )

PATH: PATCH /group/{id}
	@OA\Patch(
        path="/group/{id}",
        operationId="patchGroup",
        tags={"Group"},
        summary="update group",
        description="update group",
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="id",
            description="UpdateId",
            required=true,
            in="path",
            @OA\Schema(type="integer")
        ),
        @OA\Parameter(
            name="name",
            description="name",
            required=true,
            in="query",
            @OA\Schema(type="string")
        ),
        @OA\Parameter(
            name="note",
            description="note",
            in="query",
            @OA\Schema(type="string")
        ),
        @OA\Response(
            response=200,
            description="Successful operation",
        ),
        @OA\Response(
            response=403,
            description="Unauthenticated",
        ),
        @OA\Response(
            response=404,
            description="Role ID not specified or invalid format",
        ),
        @OA\Response(
            response=405,
            description="Specified role ID does not exist",
        ),
        @OA\Response(
            response=422,
            description="Parameter validation failed",
        ),
        @OA\Response(
            response=500,
            description="SQL Execution Error",
        )
    )


PATH: DELETE /group/{id}
	@OA\Delete(
        path="/group/{id}",
        operationId="DeleteGroup",
        tags={"Group"},
        summary="delete group",
        description="delete group",
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="id",
            description="DeleteId",
            required=true,
            in="path",
            @OA\Schema(type="integer")
        ),
        @OA\Response(
            response=200,
            description="Successful operation",
        ),
        @OA\Response(
            response=403,
            description="Unauthenticated",
        ),
        @OA\Response(
            response=404,
            description="Role ID not specified or invalid format",
        ),
        @OA\Response(
            response=500,
            description="SQL Execution Error",
        )
    )

**/


class Group
{}
