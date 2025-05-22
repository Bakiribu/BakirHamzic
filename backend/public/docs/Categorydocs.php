/**
 * @OA\Get(
 *     path="/categories",
 *     summary="Get all categories",
 *     tags={"Category"},
 *     @OA\Response(response=200, description="List of categories")
 * )
 */

/**
 * @OA\Get(
 *     path="/categories/{id}",
 *     summary="Get category by ID",
 *     tags={"Category"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Single category")
 * )
 */

/**
 * @OA\Post(
 *     path="/categories",
 *     summary="Create a new category",
 *     tags={"Category"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Category created")
 * )
 */

/**
 * @OA\Put(
 *     path="/categories/{id}",
 *     summary="Update category",
 *     tags={"Category"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(property="name", type="string")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Category updated")
 * )
 */

/**
 * @OA\Delete(
 *     path="/categories/{id}",
 *     summary="Delete category",
 *     tags={"Category"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=204, description="Category deleted")
 * )
 */
