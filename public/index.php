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

// Route the request
switch ($request_uri) {
    case '/':
    case '':
        $title = "Home - EnvisionXperts";
        // Start output buffering to capture the home template content
        ob_start();
        require __DIR__ . '/../src/Templates/home.php';
        $content = ob_get_clean();
        require __DIR__ . '/../src/Templates/layout/base.php';
        break;
        
    case '/services':
        $title = "Services - EnvisionXperts";
        ob_start();
        require __DIR__ . '/../src/Templates/services.php';
        $content = ob_get_clean();
        require __DIR__ . '/../src/Templates/layout/base.php';
        break;
        
    case '/portfolio':
        $title = "Portfolio - EnvisionXperts";
        ob_start();
        require __DIR__ . '/../src/Templates/portfolio.php';
        $content = ob_get_clean();
        require __DIR__ . '/../src/Templates/layout/base.php';
        break;
        
    case '/contact':
        $title = "Contact - EnvisionXperts";
        ob_start();
        require __DIR__ . '/../src/Templates/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../src/Templates/layout/base.php';
        break;
        
    default:
        // 404 page
        http_response_code(404);
        $title = "404 Not Found - EnvisionXperts";
        ob_start();
        require __DIR__ . '/../src/Templates/404.php';
        $content = ob_get_clean();
        require __DIR__ . '/../src/Templates/layout/base.php';
        break;
}
?>
