<?php
// ===== CONTACT FORM PROCESSING =====

// Start session
session_start();

// Set headers
header('Content-Type: application/json');

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
$errors = [];

// Name validation
if (empty($name)) {
    $errors[] = 'Name is required';
} elseif (strlen($name) < 2) {
    $errors[] = 'Name must be at least 2 characters long';
} elseif (strlen($name) > 50) {
    $errors[] = 'Name must be less than 50 characters';
}

// Email validation
if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address';
}

// Subject validation
if (empty($subject)) {
    $errors[] = 'Subject is required';
} elseif (strlen($subject) < 5) {
    $errors[] = 'Subject must be at least 5 characters long';
} elseif (strlen($subject) > 100) {
    $errors[] = 'Subject must be less than 100 characters';
}

// Message validation
if (empty($message)) {
    $errors[] = 'Message is required';
} elseif (strlen($message) < 10) {
    $errors[] = 'Message must be at least 10 characters long';
} elseif (strlen($message) > 1000) {
    $errors[] = 'Message must be less than 1000 characters';
}

// If there are validation errors
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please fix the following errors:',
        'errors' => $errors
    ]);
    exit;
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Prepare email content
$to = 'info@envisionxperts.com'; // Change this to your email
$email_subject = "New Contact Form Submission: $subject";

$email_body = "
New contact form submission from EnvisionXperts website:

Name: $name
Email: $email
Subject: $subject

Message:
$message

---
This email was sent from the contact form on envisionxperts.com
";

$headers = [
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => 'text/plain; charset=UTF-8'
];

// Send email
$mail_sent = mail($to, $email_subject, $email_body, $headers);

if ($mail_sent) {
    // Log the contact form submission
    $log_entry = date('Y-m-d H:i:s') . " - Contact form submitted by $name ($email) - Subject: $subject\n";
    file_put_contents('contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);
    
    // Send success response
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your message! We will get back to you soon.'
    ]);
} else {
    // Log the error
    $error_log = date('Y-m-d H:i:s') . " - Failed to send contact form email from $email\n";
    file_put_contents('error_log.txt', $error_log, FILE_APPEND | LOCK_EX);
    
    // Send error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was an error sending your message. Please try again later.'
    ]);
}
?> 