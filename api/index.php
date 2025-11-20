<?php

/**
 * Vercel Serverless Function for Laravel
 */

// Set base path
$basePath = dirname(__DIR__);

// Set environment variable for Laravel
$_ENV['APP_PUBLIC_PATH'] = $basePath . '/public';

// Require the Laravel bootstrap
require $basePath . '/public/index.php';

