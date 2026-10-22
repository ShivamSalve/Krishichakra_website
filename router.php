<?php
/**
 * Krishichakra Website - Local Development Router for PHP Built-in Server
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = urldecode($uri);
$filePath = __DIR__ . $path;

// Serve existing static or php files directly
if ($path !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false; // Let PHP built-in server handle the file
}

// Clean URL support: e.g. /contact-us -> /contact-us.php
if ($path !== '/' && file_exists($filePath . '.php')) {
    include $filePath . '.php';
    return true;
}

// Home page
if ($path === '/' || $path === '') {
    include __DIR__ . '/index.php';
    return true;
}

// 404 fallback
http_response_code(404);
echo "404 Not Found";
return true;
