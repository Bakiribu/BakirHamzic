/**
 * @OA\Get(
 *     path="/expenses",
 *     summary="Get all expenses",
 *     tags={"Expense"},
 *     @OA\Response(response=200, description="List of expenses")
 * )
 */

/**
 * @OA\Get(
 *     path="/expenses/{id}",
 *     summary="Get expense by ID",
 *     tags={"Expense"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Single expense")
 * )
 */

/**
 * @OA\Post(
 *     path="/expenses",
 *     summary="Create a new expense",
 *     tags={"Expense"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"amount", "date", "item_id", "employee_id"},
 *             @OA\Property(property="amount", type="number", format="float"),
 *             @OA\Property(property="date", type="string", format="date"),
 *             @OA\Property(property="item_id", type="integer"),
 *             @OA\Property(property="employee_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Expense created")
 * )
 */

/**
 * @OA\Put(
 *     path="/expenses/{id}",
 *     summary="Update expense",
 *     tags={"Expense"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(property="amount", type="number", format="float"),
 *             @OA\Property(property="date", type="string", format="date"),
 *             @OA\Property(property="item_id", type="integer"),
 *             @OA\Property(property="employee_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Expense updated")
 * )
 */

/**
 * @OA\Delete(
 *     path="/expenses/{id}",
 *     summary="Delete expense",
 *     tags={"Expense"},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=204, description="Expense deleted")
 * )
 */
