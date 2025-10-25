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
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$recaptchaToken = trim($_POST['recaptcha_token'] ?? '');

// Debug logging for troubleshooting
error_log("Contact form submission received:");
error_log("Name: $name");
error_log("Email: $email");
error_log("Subject: $subject");
error_log("Message length: " . strlen($message));
error_log("reCAPTCHA token present: " . (!empty($recaptchaToken) ? 'Yes' : 'No'));

// Log submission start
logEmailEvent('submission_started', [
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message_length' => strlen($message),
    'source_page' => $_SERVER['HTTP_REFERER'] ?? 'unknown'
]);

// Validation
$errors = [];

// Validate reCAPTCHA token first
if (empty($recaptchaToken)) {
    $errors[] = 'reCAPTCHA verification is required';
} else {
    // Verify reCAPTCHA token
    $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
    if (empty($recaptchaSecret)) {
        error_log("ERROR: RECAPTCHA_SECRET_KEY not found in environment");
        $errors[] = 'Server configuration error. Please try again later.';
    } else {
        $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $verifyUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'secret' => $recaptchaSecret,
            'response' => $recaptchaToken
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            error_log("reCAPTCHA curl error: $curlError");
            $errors[] = 'Unable to verify reCAPTCHA. Please try again.';
        } else {
            $responseData = json_decode($response, true);
            error_log("reCAPTCHA response: " . json_encode($responseData));

            if (!$responseData || !isset($responseData['success'])) {
                error_log("Invalid reCAPTCHA response format");
                $errors[] = 'reCAPTCHA verification failed. Please try again.';
            } elseif (!$responseData['success']) {
                $errorCodes = isset($responseData['error-codes']) ? $responseData['error-codes'] : [];
                error_log("reCAPTCHA verification failed. Error codes: " . implode(', ', $errorCodes));
                $errors[] = 'reCAPTCHA verification failed. Please try again.';
            } elseif (!isset($responseData['score']) || $responseData['score'] < 0.5) {
                $score = isset($responseData['score']) ? $responseData['score'] : 'unknown';
                error_log("reCAPTCHA score too low: $score");
                $errors[] = 'reCAPTCHA verification failed. Please try again.';
            }
        }
    }
}

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

    $submissionId = $pdo->lastInsertId();

    // Log successful database insertion
    logEmailEvent('database_saved', [
        'submission_id' => $submissionId,
        'name' => $name,
        'email' => $email
    ]);

    // Send email notifications
    logEmailEvent('email_sending_started', [
        'submission_id' => $submissionId,
        'recipient_type' => 'admin'
    ]);
    $adminEmailResult = sendAdminNotification($name, $email, $subject, $message, $submissionId);

    logEmailEvent('email_sending_started', [
        'submission_id' => $submissionId,
        'recipient_type' => 'user'
    ]);
    $userEmailResult = sendUserConfirmation($name, $email, $submissionId);

    // Log email results
    logEmailEvent('email_sending_completed', [
        'submission_id' => $submissionId,
        'admin_email_result' => $adminEmailResult ? 'success' : 'failed',
        'user_email_result' => $userEmailResult ? 'success' : 'failed'
    ]);

    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent successfully. We will get back to you within 24 hours.',
        'submission_id' => $submissionId
    ]);

} catch (Exception $e) {
    error_log("Contact form submission error: " . $e->getMessage());

    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was an error sending your message. Please try again later or contact us directly.'
    ]);
}

/**
 * Send notification email to admin
 */
function sendAdminNotification($name, $email, $subject, $message, $submissionId) {
    $to = env('ADMIN_EMAIL', 'masumbinshaukat@gmail.com');
    $fromEmail = env('FROM_EMAIL', 'no-reply@envisionxperts.com');
    $fromName = env('FROM_NAME', 'EnvisionXperts');

    $emailSubject = "New Contact Form Submission: $subject";

    // Get logo path
    $logoPath = __DIR__ . '/../logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg';
    $logoData = '';
    $logoType = '';

    if (file_exists($logoPath)) {
        $logoData = base64_encode(file_get_contents($logoPath));
        $logoType = mime_content_type($logoPath);
    }

    // HTML email body
    $htmlBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f8fafc; }
            .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .header { text-align: center; margin-bottom: 30px; }
            .logo { max-width: 150px; height: auto; }
            .content { line-height: 1.6; color: #333; }
            .details { background: #f8fafc; padding: 20px; border-radius: 8px; margin: 20px 0; }
            .footer { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                " . ($logoData ? "<img src='data:$logoType;base64,$logoData' alt='EnvisionXperts Logo' class='logo'>" : "<h2>EnvisionXperts</h2>") . "
                <h3>New Contact Form Submission</h3>
            </div>
            <div class='content'>
                <p><strong>New contact form submission received:</strong></p>

                <div class='details'>
                    <p><strong>Submission ID:</strong> #$submissionId</p>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong></p>
                    <p>" . nl2br(htmlspecialchars($message)) . "</p>
                    <p><strong>Submitted at:</strong> " . date('Y-m-d H:i:s') . "</p>
                </div>

                <p>Please respond to this inquiry within 1-2 business days.</p>
            </div>
            <div class='footer'>
                <p><strong>This is an automated email from EnvisionXperts contact form.</strong></p>
                <p>Replying to this email will not be recorded. Please use the contact form for follow-up communications.</p>
                <p>For urgent matters, call: " . env('COMPANY_PHONE', '+923708528313') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Send email using SMTP
    sendEmail($to, $emailSubject, $htmlBody, $fromEmail, $fromName);
}

/**
 * Send confirmation email to user
 */
function sendUserConfirmation($name, $email, $submissionId) {
    $fromEmail = env('FROM_EMAIL', 'no-reply@envisionxperts.com');
    $fromName = env('FROM_NAME', 'EnvisionXperts');

    $emailSubject = "Thank you for contacting EnvisionXperts";

    // Get logo path
    $logoPath = __DIR__ . '/../logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg';
    $logoData = '';
    $logoType = '';

    if (file_exists($logoPath)) {
        $logoData = base64_encode(file_get_contents($logoPath));
        $logoType = mime_content_type($logoPath);
    }

    // HTML email body
    $htmlBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f8fafc; }
            .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .header { text-align: center; margin-bottom: 30px; }
            .logo { max-width: 150px; height: auto; }
            .content { line-height: 1.6; color: #333; }
            .highlight { background: #e3f2fd; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #2196f3; }
            .footer { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; color: #666; font-size: 12px; }
            .contact-info { background: #f8fafc; padding: 15px; border-radius: 8px; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                " . ($logoData ? "<img src='data:$logoType;base64,$logoData' alt='EnvisionXperts Logo' class='logo'>" : "<h2>EnvisionXperts</h2>") . "
                <h3>Thank You for Contacting Us!</h3>
            </div>
            <div class='content'>
                <p>Dear $name,</p>

                <div class='highlight'>
                    <p><strong>Your message has been successfully recorded!</strong></p>
                    <p><strong>Reference ID:</strong> #$submissionId</p>
                </div>

                <p>Thank you for reaching out to EnvisionXperts. We have received your inquiry and our team will review it carefully.</p>

                <p>We typically respond to all inquiries within <strong>1-2 business days</strong>. If your matter is urgent, please don't hesitate to call us directly.</p>

                <div class='contact-info'>
                    <p><strong>Direct Contact:</strong></p>
                    <p>📧 Email: info@envisionxperts.com</p>
                    <p>📱 Phone: " . env('COMPANY_PHONE', '+923708528313') . "</p>
                </div>

                <p>We look forward to discussing your project and helping you achieve your goals.</p>

                <p>Best regards,<br>The EnvisionXperts Team</p>
            </div>
            <div class='footer'>
                <p><strong>This is an automated confirmation email.</strong></p>
                <p>Replying to this email will not be recorded. Please use our contact form for any follow-up communications.</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Send email using SMTP
    sendEmail($email, $emailSubject, $htmlBody, $fromEmail, $fromName);
}

/**
 * Send email using PHPMailer with SMTP
 */
function sendEmail($to, $subject, $htmlBody, $fromEmail, $fromName) {
    logEmailEvent('smtp_config_start', [
        'to' => $to,
        'from' => $fromEmail,
        'subject' => $subject,
        'using' => 'PHPMailer'
    ]);

    try {
        // Include PHPMailer classes
        require_once __DIR__ . '/../vendor/autoload.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = env('SMTP_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('SMTP_USERNAME');
        $mail->Password = env('SMTP_PASSWORD');
        $mail->SMTPSecure = env('SMTP_ENCRYPTION', 'ssl');
        $mail->Port = env('SMTP_PORT', 465);

        // Recipients
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = strip_tags($htmlBody); // Plain text version

        logEmailEvent('smtp_sending_attempt', [
            'to' => $to,
            'smtp_host' => $mail->Host,
            'smtp_port' => $mail->Port,
            'smtp_secure' => $mail->SMTPSecure
        ]);

        $result = $mail->send();

        logEmailEvent('smtp_result', [
            'to' => $to,
            'success' => $result ? 'true' : 'false',
            'phpmailer_response' => $result ? 'Email sent successfully' : $mail->ErrorInfo
        ]);

        return $result;

    } catch (Exception $e) {
        logEmailEvent('smtp_error', [
            'to' => $to,
            'error' => $e->getMessage(),
            'error_code' => $e->getCode()
        ]);

        error_log("PHPMailer error for $to: " . $e->getMessage());
        return false;
    }
}

/**
 * Log email events for debugging and monitoring
 */
function logEmailEvent($event, $data = []) {
    try {
        // Always create a new database connection for logging
        $pdo = getDBConnection();

        if ($pdo) {
            // Check if email_logs table exists, create it if not
            $tableCheck = $pdo->query("SHOW TABLES LIKE 'email_logs'");
            if ($tableCheck->rowCount() == 0) {
                // Create the email_logs table
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

                error_log("EMAIL LOG: Created email_logs table");
            }

            $stmt = $pdo->prepare("
                INSERT INTO email_logs (event_type, event_data, ip_address, user_agent, created_at)
                VALUES (?, ?, ?, ?, NOW())
            ");

            $ipAddress = $_SERVER['REMOTE_ADDR'] ?? '';
            $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

            $result = $stmt->execute([
                $event,
                json_encode($data),
                $ipAddress,
                $userAgent
            ]);

            if ($result) {
                error_log("EMAIL LOG SUCCESS: [$event] inserted into database");
            } else {
                error_log("EMAIL LOG ERROR: [$event] failed to insert into database");
            }
        } else {
            error_log("EMAIL LOG ERROR: Database connection failed for logging");
        }

        // Also log to PHP error log
        error_log("EMAIL LOG [$event]: " . json_encode($data));

    } catch (Exception $e) {
        error_log("EMAIL LOG EXCEPTION [$event]: " . $e->getMessage());
    }
}
?> 