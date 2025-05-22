<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Security\SecurityHeaders;
use App\Services\AppwriteService;

// Load environment variables if .env exists
if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}

// Set default environment variables if not set
$_ENV['APP_ENV'] = $_ENV['APP_ENV'] ?? 'development';
$_ENV['APP_DEBUG'] = $_ENV['APP_DEBUG'] ?? 'true';
$_ENV['REDIS_ENABLED'] = $_ENV['REDIS_ENABLED'] ?? 'false';

// Set up security headers
SecurityHeaders::setup();

// Initialize secure sessions with fallback path
$sessionPath = is_dir('/var/lib/php/sessions_secure') ? '/var/lib/php/sessions_secure' : sys_get_temp_dir();
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1');
ini_set('session.use_strict_mode', '1');
ini_set('session.save_path', $sessionPath);
session_start();

// Initialize Appwrite service if configured
if (isset($_ENV['APPWRITE_ENDPOINT']) && isset($_ENV['APPWRITE_PROJECT_ID'])) {
    $appwrite = new AppwriteService();
}

// Set up error handling
error_reporting(E_ALL);
ini_set('display_errors', $_ENV['APP_ENV'] === 'development' ? '1' : '0');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/logs/error.log');

// Create logs directory if it doesn't exist
if (!is_dir(__DIR__ . '/logs')) {
    mkdir(__DIR__ . '/logs', 0755, true);
}

// Include router configuration
require_once __DIR__ . '/bootstrap.php';

