<?php
/**
 * Database Setup Script for EnvisionXperts
 * Run this file once to create the necessary database tables
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
loadEnv(__DIR__ . '/.env');

// Database configuration from environment variables
$host = env('DB_HOST');
$dbname = env('DB_NAME');
$username = env('DB_USER');
$password = env('DB_PASS');
$port = env('DB_PORT');

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h2>Database Setup for EnvisionXperts</h2>";
    echo "<p>Connected to database: <strong>$dbname</strong></p>";
    
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
        status ENUM('new', 'read', 'replied') DEFAULT 'new'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    
    echo "<p>✅ <strong>contact_submissions</strong> table created/verified successfully</p>";
    
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
        unsubscribed_at TIMESTAMP NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    
    echo "<p>✅ <strong>newsletter_subscribers</strong> table created/verified successfully</p>";
    
    // Create email_logs table
    $pdo->exec("CREATE TABLE IF NOT EXISTS email_logs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        event_type VARCHAR(50) NOT NULL,
        event_data JSON,
        ip_address VARCHAR(45),
        user_agent TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_event_type (event_type),
        INDEX idx_created_at (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    
    echo "<p>✅ <strong>email_logs</strong> table created/verified successfully</p>";
    
    // Insert sample data for testing
    try {
        // Sample contact submission
        $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, subject, message, ip_address) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            'John Doe',
            'john.doe@example.com',
            'Website Inquiry',
            'I would like to discuss a potential web development project for my company.',
            '127.0.0.1'
        ]);
        echo "<p>✅ Sample contact submission added</p>";
    } catch (PDOException $e) {
        if ($e->getCode() != 23000) { // Not a duplicate key error
            echo "<p>⚠️ Sample contact submission: " . $e->getMessage() . "</p>";
        }
    }
    
    try {
        // Sample newsletter subscriber
        $stmt = $pdo->prepare("INSERT INTO newsletter_subscribers (email, ip_address) VALUES (?, ?)");
        $stmt->execute([
            'subscriber@example.com',
            '127.0.0.1'
        ]);
        echo "<p>✅ Sample newsletter subscriber added</p>";
    } catch (PDOException $e) {
        if ($e->getCode() != 23000) { // Not a duplicate key error
            echo "<p>⚠️ Sample newsletter subscriber: " . $e->getMessage() . "</p>";
        }
    }
    
    // Show table structure
    echo "<h3>Table Structure:</h3>";
    
    echo "<h4>contact_submissions:</h4>";
    $result = $pdo->query("DESCRIBE contact_submissions");
    echo "<table border='1' style='border-collapse: collapse; margin: 10px 0;'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['Field']}</td>";
        echo "<td>{$row['Type']}</td>";
        echo "<td>{$row['Null']}</td>";
        echo "<td>{$row['Key']}</td>";
        echo "<td>{$row['Default']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<h4>newsletter_subscribers:</h4>";
    $result = $pdo->query("DESCRIBE newsletter_subscribers");
    echo "<table border='1' style='border-collapse: collapse; margin: 10px 0;'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['Field']}</td>";
        echo "<td>{$row['Type']}</td>";
        echo "<td>{$row['Null']}</td>";
        echo "<td>{$row['Key']}</td>";
        echo "<td>{$row['Default']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<h4>email_logs:</h4>";
    $result = $pdo->query("DESCRIBE email_logs");
    echo "<table border='1' style='border-collapse: collapse; margin: 10px 0;'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['Field']}</td>";
        echo "<td>{$row['Type']}</td>";
        echo "<td>{$row['Null']}</td>";
        echo "<td>{$row['Key']}</td>";
        echo "<td>{$row['Default']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<h3>🎉 Database setup completed successfully!</h3>";
    echo "<p>You can now:</p>";
    echo "<ul>";
    echo "<li>Submit contact forms from your website</li>";
    echo "<li>Collect newsletter subscriptions</li>";
    echo "<li>View all submissions in your MySQL database</li>";
    echo "</ul>";
    echo "<p><strong>Note:</strong> You can delete this setup file after successful execution.</p>";
    
} catch (PDOException $e) {
    echo "<h2>❌ Database Setup Failed</h2>";
    echo "<p>Error: " . $e->getMessage() . "</p>";
    echo "<p>Please check:</p>";
    echo "<ul>";
    echo "<li>Database name 'envisionxperts' exists</li>";
    echo "<li>Username and password are correct</li>";
    echo "<li>MySQL service is running</li>";
    echo "</ul>";
}
?>
