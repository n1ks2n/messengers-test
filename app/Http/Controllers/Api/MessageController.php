<?php
declare(strict_types=1);

namespace MessengersTest\Http\Controllers\Api;

use Illuminate\Http\Request;
use MessengersTest\Http\Controllers\Controller;
use Response;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="L5 Swagger API",
 *      description="L5 Swagger API description",
 *      @OA\Contact(
 *          email="nikita.pimoshenko@gmail.com",
 *      ),
 * )
 * @OA\SecurityScheme(
 *      name="passport",
 *      securityScheme="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT"
 * )
 * @OA\Server(
 *     url="http://localhost:8510/api/v1",
 *     description="Dev messenger api server",
 * )
 */
class MessageController extends Controller
{
    /**
     * @OA\Get(
     *     path="/messengers",
     *     summary="Get messengers list",
     *     operationId="getMessengers",
     *     @OA\Response(
     *          response=200,
     *          description="Returned messengers list",
     *     ),
     *     security={
     *         {"bearerAuth": {}}
     *     }
     * )
     *
     * @return Response
     */
    public function getMessengers(): Response
    {

    }

    /**
     * @OA\Get(
     *     path="/users",
     *     summary="Get users list",
     *     operationId="getUsers",
     *     @OA\Response(
     *          response=200,
     *          description="Returned messengers list",
     *     ),
     *     security={
     *         {"bearerAuth": {}}
     *     }
     * )
     *
     * @return Response
     */
    public function getUsers(): Response
    {

    }

    /**
     * @OA\Post(
     *     path="/messages",
     *     summary="Create new message",
     *     operationId="createMessages",
     *     @OA\RequestBody(
     *          description="Create messages object",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  required={"users", "text", "messengers"},
     *                  @OA\Property(
     *                      property="users",
     *                      type="array",
     *                      description="Array of user ids",
     *                      example={1,2,3},
     *                      @OA\Items(
     *                          type="integer",
     *                          format="int32",
     *                          minimum="1",
     *                      ),
     *                  ),
     *                  @OA\Property(
     *                      property="text",
     *                      type="string",
     *                      description="Message text",
     *                      example="Text me baby one more time!"
     *                  ),
     *                  @OA\Property(
     *                      property="messengers",
     *                      type="array",
     *                      description="Messenger ids array.",
     *                      example={1,2,3},
     *                      @OA\Items(
     *                          type="integer",
     *                          format="int32",
     *                          minimum="1",
     *                      ),
     *                  ),
     *              )
     *          ),
     *     ),
     *     @OA\Response(
     *          response=201,
     *          description="Successfully created",
     *     ),
     *     security={
     *         {"bearerAuth": {}}
     *     }
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createMessages(Request $request): Response
    {

    }


}