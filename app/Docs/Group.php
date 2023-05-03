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
        summary="獲得群組資料",
	description="得到所屬權限的Group資料(root可查看所有group)",
        security={{"bearerAuth":{}}},
        @OA\Response(
            response=200,
            description="success get on webform",
        ),
        @OA\Response(
            response=401,
            description="Unauthenticated"
        ),
        @OA\Response(
            response=404,
            description="Specified ID does not exist"
        ),
        @OA\Response(
            response=403,
            description="Forbidden"

        ),
        @OA\Response(
            response=422,
            description="Invalid ID type"

        )
    )


PATH: GET /group/{id}
	@OA\Get(
        path="/group/{id}",
        operationId="getGroupId",
        tags={"Group"},
        summary="獲得指定group資料",
        description="輸入id 獲得特定id group資料 (id限int)",
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
            response=401,
            description="Unauthenticated"
        ),
        @OA\Response(
            response=404,
            description="Specified ID does not exist"
        ),
        @OA\Response(
            response=403,
            description="Forbidden"

        ),
        @OA\Response(
            response=422,
            description="Invalid ID type"

        )
    )


PATH: POST /group
	@OA\Post(
        path="/group",
        operationId="postGroup",
        tags={"Group"},
        summary="新增group",
        description="創立新的group(note可為空)",
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
            response=401,
            description="Unauthenticated",
    	),
	 @OA\Response(
            response=403,
            description="Forbidden",
        ),      
        @OA\Response(
            response=422,
            description="Parameter validation failed",
        ),               
        
    )

PATH: PATCH /group/{id}
	@OA\Patch(
        path="/group/{id}",
        operationId="patchGroup",
        tags={"Group"},
        summary="修改 group",
        description="修改group資料",
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="id",
            description="欲修改的group id",
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
            response=401,
            description="Unauthenticated",
        ),
        @OA\Response(
            response=403,
            description="Forbidden",
        ),
        @OA\Response(
            response=404,
            description="Parameter does not exist or already exists.",
        ),
        @OA\Response(
            response=422,
            description="Parameter validation failed",
        )
    )


PATH: DELETE /group/{id}
	@OA\Delete(
        path="/group/{id}",
        operationId="DeleteGroup",
        tags={"Group"},
        summary="刪除group",
	description="刪除指定group(group必須沒有成員)",
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
            response=401,
            description="Unauthenticated",
        ),
        @OA\Response(
            response=403,
            description="Forbidden",
        ),
        @OA\Response(
            response=404,
            description="Parameter does not exist or already exists.",
        ),
        @OA\Response(
            response=500,
            description="SQL Execution Error",
        )
    )

**/


class Group
{}
