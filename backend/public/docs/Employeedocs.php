/**
 * @OA\Get(
 *     path="/employees",
 *     summary="Get all employees",
 *     tags={"Employee"},
 *     @OA\Response(response=200, description="List of employees")
 * )
 */

/**
 * @OA\Get(
 *     path="/employees/{id}",
 *     summary="Get employee by ID",
 *     tags={"Employee"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Single employee")
 * )
 */

/**
 * @OA\Post(
 *     path="/employees",
 *     summary="Create a new employee",
 *     tags={"Employee"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name", "position", "office_id"},
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="position", type="string"),
 *             @OA\Property(property="office_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Employee created")
 * )
 */

/**
 * @OA\Put(
 *     path="/employees/{id}",
 *     summary="Update employee",
 *     tags={"Employee"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="position", type="string"),
 *             @OA\Property(property="office_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Employee updated")
 * )
 */

/**
 * @OA\Delete(
 *     path="/employees/{id}",
 *     summary="Delete employee",
 *     tags={"Employee"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=204, description="Employee deleted")
 * )
 */
