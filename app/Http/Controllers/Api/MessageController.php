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
 *          email="nikita.pimoshenko@gmail.com"
 *      ),
 * )
 * @OA\SecurityScheme(
 *      name="passport",
 *      securityScheme="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT"
 * )
 */
class MessageController extends Controller
{
    /**
     * @OA\Post(
     *     path="/messages",
     *     summary="Create new message",
     *     operationId="createMessages",
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