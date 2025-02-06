<?php
namespace App\Models;
require_once __DIR__ . '/../helpers.php'; // Include database connection

class User {
    public static function authenticate($username, $password) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
