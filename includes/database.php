<?php
/**
 * Simple Database Connection for EnvisionXperts
 * Loads environment variables and provides database connection
 */

// Load environment variables
function loadEnv($path) {
    if (!file_exists($path)) {
        return false;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Parse key=value pairs
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);

            // Remove quotes if present
            if (preg_match('/^["\'](.*)["\']$/', $value, $matches)) {
                $value = $matches[1];
            }

            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }
    return true;
}

/**
 * Get environment variable with optional default
 */
function env($key, $default = null) {
    $value = getenv($key);
    if ($value === false) {
        $value = $_ENV[$key] ?? $default;
    }
    return $value;
}

// Load .env file
loadEnv(__DIR__ . '/../.env');

/**
 * Get database connection using PDO
 */
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . env('DB_HOST', 'localhost') . ";port=" . env('DB_PORT', '3306') . ";dbname=" . env('DB_NAME', 'envisionxperts') . ";charset=" . env('DB_CHARSET', 'utf8mb4');

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
        ];

        $pdo = new PDO($dsn, env('DB_USER', 'root'), env('DB_PASS', ''), $options);

        return $pdo;

    } catch (PDOException $e) {
        // Log error for debugging
        error_log("Database connection failed: " . $e->getMessage());
        return null;
    }
}
?>
