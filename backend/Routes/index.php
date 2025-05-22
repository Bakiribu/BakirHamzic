<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/rest/services/AuthService.php';
require_once __DIR__ . '/rest/services/ExpenseService.php';

require_once __DIR__ . '/middleware/AuthMiddleware.php';

Flight::register('auth_service', 'AuthService');
Flight::register('expenseService', 'ExpenseService');
Flight::register('auth_middleware', 'AuthMiddleware');

Flight::route('/*', function(){
    $url = Flight::request()->url;
    if(strpos($url, '/auth/login') === 0 || strpos($url, '/auth/register') === 0){
        return TRUE;  
    }
    try {
        $token = Flight::request()->getHeader("Authentication");
        if(Flight::auth_middleware()->verifyToken($token)){
            return TRUE;
        }
    } catch (Exception $e){
        Flight::halt(401, $e->getMessage());
    }
});

require_once __DIR__ . '/rest/routes/AuthRoutes.php';
require_once __DIR__ . '/rest/routes/ExpenseRoutes.php';

Flight::start();
