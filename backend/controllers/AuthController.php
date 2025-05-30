<?php

require_once __DIR__ . '/../services/AuthService.php';

class AuthController {

    public static function login() {
        $data = Flight::request()->data;

        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;

        if (!$email || !$password) {
            Flight::json(["error" => "Email and password are required"], 400);
            return;
        }

        $user = AuthService::login($email, $password);

        if (!$user) {
            Flight::json(["error" => "Invalid credentials"], 401);
        } else {
            Flight::json($user);
        }
    }

    public static function logout() {
        Flight::json(["message" => "Successfully logged out"]);
    }
}
