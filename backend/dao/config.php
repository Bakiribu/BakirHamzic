<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'expense_tracking');
define('DB_USER', 'root');
define('DB_PASS', '');


require_once __DIR__ . '/../db/Database.php';

$db = Database::connect();
