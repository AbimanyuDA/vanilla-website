<?php
// Simple static export script for key Laravel routes.
// Usage (after composer autoload present): php scripts/export-static.php

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$kernel = $app->make(Kernel::class);

// Routes we want to pre-render
$routes = [
    '/' => 'index.html',
    '/about' => 'about.html',
    '/contact' => 'contact.html',
];

$outputDir = __DIR__ . '/../public/static';
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
}

foreach ($routes as $uri => $filename) {
    $request = Request::create($uri, 'GET');
    $response = $kernel->handle($request);
    $content = $response->getContent();
    file_put_contents($outputDir . '/' . $filename, $content);
    echo "Exported $uri => static/$filename\n";
    $kernel->terminate($request, $response);
}

echo "Static export completed.\n";
