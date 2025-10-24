<?php
session_start();
require_once '../config/database.php';

// Set content type to JSON for AJAX requests
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Validate and sanitize input
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address';
}

if (empty($subject)) {
    $errors[] = 'Subject is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// If there are validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => 'Please fix the following errors:',
        'errors' => $errors
    ]);
    exit;
}

try {
    $pdo = getDBConnection();
    if (!$pdo) {
        throw new Exception('Database connection failed');
    }
    
    // Prepare and execute the insert statement
    $stmt = $pdo->prepare("
        INSERT INTO contact_submissions (name, email, subject, message, ip_address, user_agent) 
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? '';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    $stmt->execute([$name, $email, $subject, $message, $ipAddress, $userAgent]);
    
    // Send email notification (optional - you can implement this later)
    // sendEmailNotification($name, $email, $subject, $message);
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent successfully. We will get back to you within 24 hours.',
        'submission_id' => $pdo->lastInsertId()
    ]);
    
} catch (Exception $e) {
    error_log("Contact form submission error: " . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was an error sending your message. Please try again later or contact us directly.'
    ]);
}

// Function to send email notification (implement later if needed)
function sendEmailNotification($name, $email, $subject, $message) {
    $to = 'info@envisionxperts.com';
    $emailSubject = "New Contact Form Submission: $subject";
    
    $emailBody = "
    New contact form submission received:
    
    Name: $name
    Email: $email
    Subject: $subject
    
    Message:
    $message
    
    Submitted at: " . date('Y-m-d H:i:s') . "
    ";
    
    $headers = "From: noreply@envisionxperts.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($to, $emailSubject, $emailBody, $headers);
}
?> 