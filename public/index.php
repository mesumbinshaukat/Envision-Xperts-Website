<?php
// Set error reporting in development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/envisionxperts.com';

// Remove base path from request URI
if (strpos($request_uri, $base_path) === 0) {
    $request_uri = substr($request_uri, strlen($base_path));
}

// Remove query string
$request_uri = parse_url($request_uri, PHP_URL_PATH);

// Function to convert URL to title case
function urlToTitle($url) {
    return ucwords(str_replace(['-', '/'], [' ', ' '], trim($url, '/')));
}

// Function to get template path
function getTemplatePath($uri) {
    $uri = trim($uri, '/');
    if (empty($uri)) {
        return __DIR__ . '/../src/Templates/home.php';
    }
    
    $parts = explode('/', $uri);
    $templatePath = __DIR__ . '/../src/Templates/';
    
    // Handle nested paths (like services/web-development)
    if (count($parts) > 1) {
        $templatePath .= $parts[0] . '/' . $parts[1] . '.php';
    } else {
        // Special handling for services index page
        if ($parts[0] === 'services') {
            $templatePath .= 'services/index.php';
        } else {
            $templatePath .= $parts[0] . '.php';
        }
    }
    
    return $templatePath;
}

// Function to generate page title
function generatePageTitle($uri) {
    $uri = trim($uri, '/');
    if (empty($uri)) {
        return "Home - EnvisionXperts";
    }
    
    $title = urlToTitle($uri);
    return $title . " - EnvisionXperts";
}

// Dynamic routing
$templatePath = getTemplatePath($request_uri);
$title = generatePageTitle($request_uri);

if (file_exists($templatePath)) {
    // Start output buffering
    ob_start();
    require $templatePath;
    $content = ob_get_clean();
    require __DIR__ . '/../src/Templates/layout/base.php';
} else {
    // 404 page
    http_response_code(404);
    $title = "404 Not Found - EnvisionXperts";
    ob_start();
    require __DIR__ . '/../src/Templates/404.php';
    $content = ob_get_clean();
    require __DIR__ . '/../src/Templates/layout/base.php';
}
?>
