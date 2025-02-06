<?php
namespace App\Controllers;
use App\Models\User;

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['mypass'];

            $user = User::authenticate($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: /dashboard");
                exit();
            } else {
                header("Location: /login?error=invalid_credentials");
                exit();
            }
        }
    }
}
