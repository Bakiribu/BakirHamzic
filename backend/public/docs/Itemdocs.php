/**
 * @OA\Get(
 *     path="/items",
 *     summary="Get all items",
 *     tags={"Item"},
 *     @OA\Response(response=200, description="List of items")
 * )
 */

/**
 * @OA\Get(
 *     path="/items/{id}",
 *     summary="Get item by ID",
 *     tags={"Item"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Single item")
 * )
 */

/**
 * @OA\Post(
 *     path="/items",
 *     summary="Create a new item",
 *     tags={"Item"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name", "category_id"},
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="category_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Item created")
 * )
 */

/**
 * @OA\Put(
 *     path="/items/{id}",
 *     summary="Update item",
 *     tags={"Item"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="category_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Item updated")
 * )
 */

/**
 * @OA\Delete(
 *     path="/items/{id}",
 *     summary="Delete item",
 *     tags={"Item"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=204, description="Item deleted")
 * )
 */
