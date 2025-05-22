<?php
// Prevent directory listing
if (PHP_SAPI === 'cli-server') {
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

// Load Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Route all requests to the public directory
require __DIR__ . '/public/index.php'; 