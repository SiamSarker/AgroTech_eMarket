<?php
use App\Controllers\AuthController;

$routes = [
    '/login' => [AuthController::class, 'login'],
];

$requestUri = strtok($_SERVER["REQUEST_URI"], '?');

if (isset($routes[$requestUri])) {
    [$controller, $method] = $routes[$requestUri];
    (new $controller())->$method();
} else {
    http_response_code(404);
    echo "Page Not Found";
}
