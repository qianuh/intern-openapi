<?php

namespace App\Docs;

/**

	@OA\Tag(
		name="Auth",
		description="權限相關"
	)

PATH: POST /signup
	@OA\Post(
		path="/auth/signup",
		tags={"Auth"},
		summary="註冊",
		description="建立User(權限為root)",
		operationId="auth/signup",
		@OA\RequestBody(
                        @OA\JsonContent(
				@OA\Property(
					property="name",
					type="string",
					description="user name",
				),
				@OA\Property(
					property="email",
					type="string",
					description="user email",
				),
				@OA\Property(
					property="password",
					type="string",
					description="password",
				),
				@OA\Property(
					property="password_confirmation",
					type="string",
					description="confirm password",
				),		
			
			),
                ),
                @OA\Response(
                        response=200,
                        description="Successful operation",
                ),
                @OA\Response(
                        response=201,
                        description="Unauthenticated",
                )

	)


PATH: POST /auth/login
	@OA\Post(
		path="/auth/login",
		operationId="auth/login",
		tags={"Auth"},
		summary="登入",
		description="登入user",
		@OA\RequestBody(
			@OA\JsonContent(
					@OA\Property(
						property="email",
						type="string",
						description="user email",
					),
					@OA\Property(
						property="password",
						type="string",
						description="password",
					),
					@OA\Property(
						property="type",
						type="string",
						default="base",
						description="login type: base|ldap",
					)
			
			)
		),
		
		@OA\Response(
			response=200,
			description="Successful operation",
		),
		@OA\Response(
			response=401,
			description="Unauthenticated",
		)
	)

PATH: GET /auth/logout
登出所帶的Token User
	@OA\Get(
        path="/auth/logout",
        operationId="auth/logout",
        tags={"Auth"},
        summary="登出",
        description="登出user",
        @OA\Response(
            response=200,
            description="Successfully logged out",
            @OA\JsonContent(
                @OA\Schema(
                    @OA\Property(
                        property="message",
                        type="string",
                    ),
                ),
                @OA\Examples(example="message", value="Successfully logged out", summary="Successfully logged out"),
            ),
        ),
        @OA\Response(
            response=401,
            description="Unauthenticated",
            @OA\JsonContent(
                @OA\Schema(
                    @OA\Property(
                        property="message",
                        type="string",
                    ),
                ),
                @OA\Examples(example="message", value="Unauthenticated", summary="logout fail"),
            ),
        )
    )

PATH: GET /auth/whoami
取得目前Token的User資訊
	@OA\Get(
        path="/auth/whoami",
        operationId="auth/whoami",
        tags={"Auth"},
        summary="查詢user相關資料",
        description="可以得到user基本資料，所屬group等...",
        @OA\Response(
            response=200,
            description="token user info",
            @OA\JsonContent(
                @OA\Schema(
                    @OA\Property(
                        property="message",
                        type="string"
                    ),
                ),
                @OA\Examples(example="message", value="modify ...", summary="need modify..."),
            ),
        ),
        @OA\Response(
            response=401,
            description="Unauthenticated",
            @OA\JsonContent(
                @OA\Schema(
                    @OA\Property(
                        property="message",
                        type="string"
                    ),
                ),
                @OA\Examples(example="message", value="Unauthenticated", summary="logout fail"),
            ),
        ),
        security={{"bearerAuth":{}}}
    )


**/

class Auth
{

}
