<?php
/**
 * Krishichakra Foods Private Limited
 * Vercel Serverless PHP Router
 */

// Dynamically locate the project root directory containing index.php, header.php, etc.
$possibleRoots = [
    dirname(__DIR__),
    __DIR__ . '/..',
    $_SERVER['DOCUMENT_ROOT'] ?? '',
    '/var/task/user',
    '/var/task'
];

$PROJECT_ROOT = null;
foreach ($possibleRoots as $dir) {
    if ($dir && file_exists($dir . '/header.php')) {
        $PROJECT_ROOT = realpath($dir) ?: $dir;
        break;
    }
}

if (!$PROJECT_ROOT) {
    $PROJECT_ROOT = dirname(__DIR__);
}

chdir($PROJECT_ROOT);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = ltrim($uri, '/');

if ($path === '' || $path === 'index.php' || $path === 'api/index.php') {
    require $PROJECT_ROOT . '/index.php';
    exit;
}

$targetFile = $PROJECT_ROOT . '/' . $path;

// If target is a valid PHP file in root directory, execute it
if (file_exists($targetFile) && is_file($targetFile) && pathinfo($targetFile, PATHINFO_EXTENSION) === 'php') {
    require $targetFile;
    exit;
}

// Fallback to index.php for any unknown route
require $PROJECT_ROOT . '/index.php';