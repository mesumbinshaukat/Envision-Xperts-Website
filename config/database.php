<?php
/**
 * Database Configuration for EnvisionXperts
 * Live Hosting Database Connection
 */

// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_NAME', 'u308096205_envisionxperts');
define('DB_USER', 'u308096205_envisionxperts');
define('DB_PASS', '3;Qq;sVqB');
define('DB_PORT', '65002');
define('DB_CHARSET', 'utf8mb4');

/**
 * Get database connection using PDO
 * @return PDO|null Returns PDO connection or null on failure
 */
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
        ];
        
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        
        return $pdo;
        
    } catch (PDOException $e) {
        // Log error for debugging (in production, you might want to log this to a file)
        error_log("Database connection failed: " . $e->getMessage());
        
        // Return null to indicate connection failure
        return null;
    }
}

/**
 * Test database connection
 * @return bool Returns true if connection successful, false otherwise
 */
function testDBConnection() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            // Simple test query
            $stmt = $pdo->query("SELECT 1");
            return $stmt !== false;
        } catch (PDOException $e) {
            error_log("Database test query failed: " . $e->getMessage());
            return false;
        }
    }
    return false;
}

/**
 * Initialize database tables if they don't exist
 * This will be called automatically when needed
 */
function initializeDatabase() {
    $pdo = getDBConnection();
    if (!$pdo) {
        return false;
    }
    
    try {
        // Create contact_submissions table
        $pdo->exec("CREATE TABLE IF NOT EXISTS contact_submissions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            subject VARCHAR(200) NOT NULL,
            message TEXT NOT NULL,
            ip_address VARCHAR(45),
            user_agent TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('new', 'read', 'replied') DEFAULT 'new',
            INDEX idx_status (status),
            INDEX idx_created_at (created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        
        // Create newsletter_subscribers table
        $pdo->exec("CREATE TABLE IF NOT EXISTS newsletter_subscribers (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL UNIQUE,
            first_name VARCHAR(50),
            last_name VARCHAR(50),
            ip_address VARCHAR(45),
            user_agent TEXT,
            subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('active', 'unsubscribed') DEFAULT 'active',
            unsubscribed_at TIMESTAMP NULL,
            INDEX idx_status (status),
            INDEX idx_email (email)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        
        return true;
        
    } catch (PDOException $e) {
        error_log("Database initialization failed: " . $e->getMessage());
        return false;
    }
}

// Auto-initialize database tables on first include
if (getDBConnection()) {
    initializeDatabase();
}
?>