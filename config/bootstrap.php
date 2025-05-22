<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Appwrite\Client;
use Appwrite\Services\Database;

// Environment variables are already loaded in init.php

// Initialize Appwrite client (if configured)
$appwriteEnabled = isset($_ENV['APPWRITE_ENDPOINT']) && 
                  isset($_ENV['APPWRITE_PROJECT_ID']) && 
                  isset($_ENV['APPWRITE_API_KEY']) &&
                  !empty($_ENV['APPWRITE_ENDPOINT']) && 
                  !empty($_ENV['APPWRITE_PROJECT_ID']);

$client = null;
$database = null;

if ($appwriteEnabled) {
    try {
        $client = new Client();
        $client
            ->setEndpoint($_ENV['APPWRITE_ENDPOINT'])
            ->setProject($_ENV['APPWRITE_PROJECT_ID'])
            ->setKey($_ENV['APPWRITE_API_KEY']);
        
        // Initialize services
        $database = new Database($client);
    } catch (Exception $e) {
        error_log('Appwrite initialization failed: ' . $e->getMessage());
    }
}

// Security headers
header('Content-Security-Policy: default-src \'self\'; script-src \'self\' https://apis.appwrite.io');
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');

// Rate limiting
if (file_exists(__DIR__ . '/../src/Utils/RateLimiter.php')) {
    require_once __DIR__ . '/../src/Utils/RateLimiter.php';
}

