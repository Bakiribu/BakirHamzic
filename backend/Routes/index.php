<?php
require 'vendor/autoload.php';

require_once __DIR__ . '/rest/services/ExpenseService.php';


Flight::register('expenseService', 'ExpenseService');


require_once __DIR__ . '/rest/routes/ExpenseRoutes.php';

Flight::start();
?>
