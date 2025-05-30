/**
 * @OA\Get(
 *     path="/offices",
 *     summary="Get all offices",
 *     tags={"Office"},
 *     @OA\Response(response=200, description="List of offices")
 * )
 */

/**
 * @OA\Get(
 *     path="/offices/{id}",
 *     summary="Get office by ID",
 *     tags={"Office"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Single office")
 * )
 */

/**
 * @OA\Post(
 *     path="/offices",
 *     summary="Create a new office",
 *     tags={"Office"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name", "location"},
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="location", type="string")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Office created")
 * )
 */

/**
 * @OA\Put(
 *     path="/offices/{id}",
 *     summary="Update office",
 *     tags={"Office"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="location", type="string")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Office updated")
 * )
 */

/**
 * @OA\Delete(
 *     path="/offices/{id}",
 *     summary="Delete office",
 *     tags={"Office"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=204, description="Office deleted")
 * )
 */
