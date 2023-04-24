<?php
namespace App\Docs;

/**
	@OA\PathItem(path="/api")

	@OA\Info(
         version="1.0.0",
         title="Laravel OpenApi Demo Documentation",
         description="L5 Swagger OpenApi description 中文測試",
         @OA\Contact(
             email="admin@admin.com"
         ),
         @OA\License(
             name="Apache 2.0",
             url="http://www.apache.org/licenses/LICENSE-2.0.html"
         )
	)
	


	@OA\Tag(
		name="Info",
		description="helloworold"
	)

	@OA\Get(
		path="/Info",
		tags={"Info"},
		
		@OA\Response(
			response=200,
			description="yo"
		)
	)
**/


//class Info extends Controller{
class Info
{

}
