<?php

namespace App\Docs;

/**
	@OA\Tag(
		name="User",
		description="user相關操作"
	)


PATH: GET /user
	@OA\Get(
        path="/user",
        operationId="/user",
        tags={"User"},
        summary="Get list of user",
        description="Returns list of user",
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="offset",
            description="offset",
            in="query",
            @OA\Schema(type="integer")
        ),        @OA\Parameter(
            name="limit",
            description="limit",
            in="query",
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
            description="Forbidden"
        )
    )

PATH: GET /user/{id}
	@OA\Get(
        path="/user/{id}",
        operationId="/user/{id}",
        tags={"User"},
        security={{"bearerAuth":{}}},
        @OA\Parameter(
            name="id",
            description="specific user id",
            required=true,
            in="path",
            @OA\Schema(type="integer")
        ),
        @OA\Response(
            response=200,
            description="success get on user"
        ),
        @OA\Response(
            response=403,
            description="Forbidden"
        )
    )

PATH: GET /user?filter={"group":{group_id}}
PATH: POST /user
PATH: PATCH /user/{id}
PATH: DELETE /user/{id}
PATH: PATCH /user/{id}/password


**/



class User
{

}
