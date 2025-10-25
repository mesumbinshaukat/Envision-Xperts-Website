<?php
session_start();
require_once '../includes/database.php';

// Set content type to JSON for AJAX requests
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Validate and sanitize input
$email = trim($_POST['email'] ?? '');

// Validation
if (empty($email)) {
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => 'Email address is required'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => 'Please enter a valid email address'
    ]);
    exit;
}

try {
    $pdo = getDBConnection();
    if (!$pdo) {
        throw new Exception('Database connection failed');
    }
    
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id, status FROM newsletter_subscribers WHERE email = ?");
    $stmt->execute([$email]);
    $existing = $stmt->fetch();
    
    if ($existing) {
        if ($existing['status'] === 'unsubscribed') {
            // Reactivate subscription
            $stmt = $pdo->prepare("UPDATE newsletter_subscribers SET status = 'active', unsubscribed_at = NULL WHERE email = ?");
            $stmt->execute([$email]);
            
            echo json_encode([
                'success' => true,
                'message' => 'Welcome back! Your newsletter subscription has been reactivated.'
            ]);
        } else {
            echo json_encode([
                'success' => false, 
                'message' => 'This email address is already subscribed to our newsletter.'
            ]);
        }
        exit;
    }
    
    // Insert new subscriber
    $stmt = $pdo->prepare("
        INSERT INTO newsletter_subscribers (email, ip_address, user_agent) 
        VALUES (?, ?, ?)
    ");
    
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? '';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    $stmt->execute([$email, $ipAddress, $userAgent]);
    
    // Send welcome email (optional - implement later)
    // sendWelcomeEmail($email);
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for subscribing to our newsletter! You will receive updates about technology trends and industry insights.',
        'subscriber_id' => $pdo->lastInsertId()
    ]);
    
} catch (Exception $e) {
    error_log("Newsletter subscription error: " . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was an error processing your subscription. Please try again later.'
    ]);
}

// Function to send welcome email (implement later if needed)
function sendWelcomeEmail($email) {
    $to = $email;
    $subject = "Welcome to EnvisionXperts Newsletter!";
    
    $message = "
    Dear Subscriber,
    
    Thank you for subscribing to the EnvisionXperts newsletter!
    
    You will now receive:
    - Latest technology trends and insights
    - Industry updates and best practices
    - Company news and project highlights
    - Exclusive content and tips
    
    If you have any questions, feel free to reply to this email.
    
    Best regards,
    The EnvisionXperts Team
    
    ---
    To unsubscribe, please visit our website or reply with 'UNSUBSCRIBE' in the subject line.
    ";
    
    $headers = "From: newsletter@envisionxperts.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($to, $subject, $message, $headers);
}
?>
