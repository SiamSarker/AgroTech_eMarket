<?php
$config = require __DIR__ . '/../config/database.php';

try {
    $conn = new PDO(
        "mysql:host={$config['host']};dbname={$config['dbname']}",
        $config['username'],
        $config['password'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
