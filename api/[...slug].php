<?php

/**
 * Vercel Serverless Function - Handle all Laravel routes
 * This file catches all requests and forwards them to Laravel
 */

// Get the request path
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$requestPath = parse_url($requestUri, PHP_URL_PATH);

// Remove query string if exists
$_SERVER['REQUEST_URI'] = $requestPath;

// Set proper request method
$_SERVER['REQUEST_METHOD'] = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// Load environment
$basePath = dirname(dirname(__FILE__));

// Load composer autoloader
if (!file_exists($basePath . '/vendor/autoload.php')) {
    http_response_code(500);
    die('Composer dependencies not found. Run: composer install');
}

require $basePath . '/vendor/autoload.php';

// Load Laravel
try {
    $app = require_once $basePath . '/bootstrap/app.php';
    $kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = \Illuminate\Http\Request::capture()
    );
    $response->send();
    $kernel->terminate($request, $response);
} catch (Exception $e) {
    http_response_code(500);
    echo 'Error: ' . $e->getMessage();
}
