<?php
session_start();
require_once '../includes/database.php';

// Encrypted admin password (hashed with openssl in WSL Linux)
$admin_password = env('ADMIN_PASSWORD');
$is_authenticated = false;

if (isset($_POST['password']) && isset($_POST['recaptcha_token'])) {
    // Verify reCAPTCHA token first
    $recaptchaToken = trim($_POST['recaptcha_token']);
    if (!empty($recaptchaToken)) {
        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
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
            error_log("Admin login reCAPTCHA curl error: $curlError");
        } else {
            $responseData = json_decode($response, true);

            if ($responseData && isset($responseData['success']) && $responseData['success'] &&
                isset($responseData['score']) && $responseData['score'] >= 0.5 &&
                password_verify($_POST['password'], $admin_password)) {
                $is_authenticated = true;
                $_SESSION['admin_authenticated'] = true;
            } else {
                error_log("Admin login failed. reCAPTCHA response: " . json_encode($responseData));
            }
        }
    }
} elseif (isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true) {
    $is_authenticated = true;
}

if (!$is_authenticated) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - EnvisionXperts</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <!-- Google reCAPTCHA v3 -->
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo env('RECAPTCHA_SITE_KEY', '6LfjzfUrAAAAABXvB6CT8h6vvzzIrByBnS9BXJKP'); ?>"></script>
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h4><i class="fas fa-lock me-2"></i>Admin Access</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="loginForm">
                                <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100" id="loginBtn">
                                    <i class="fas fa-sign-in-alt me-2"></i>Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script>
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const btn = document.getElementById('loginBtn');
                const originalText = btn.innerHTML;

                // Disable button and show loading
                btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Verifying...';
                btn.disabled = true;

                // Generate reCAPTCHA token
                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo env('RECAPTCHA_SITE_KEY', '6LfjzfUrAAAAABXvB6CT8h6vvzzIrByBnS9BXJKP'); ?>', {action: 'admin_login'}).then(function(token) {
                        // Set the token in the hidden field
                        document.getElementById('recaptcha_token').value = token;

                        // Submit the form
                        document.getElementById('loginForm').submit();
                    }).catch(function(error) {
                        console.error('reCAPTCHA error:', error);
                        alert('reCAPTCHA verification failed. Please try again.');
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    });
                });
            });
        </script>
    </body>
    </html>
    <?php
    exit;
}

// Get database connection
$pdo = getDBConnection();
if (!$pdo) {
    die("Database connection failed");
}

// Handle actions
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'mark_read':
            $stmt = $pdo->prepare("UPDATE contact_submissions SET status = 'read' WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            break;
        case 'mark_replied':
            $stmt = $pdo->prepare("UPDATE contact_submissions SET status = 'replied' WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            break;
        case 'delete_contact':
            $stmt = $pdo->prepare("DELETE FROM contact_submissions WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            break;
        case 'unsubscribe':
            $stmt = $pdo->prepare("UPDATE newsletter_subscribers SET status = 'unsubscribed', unsubscribed_at = NOW() WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            break;
        case 'delete_subscriber':
            $stmt = $pdo->prepare("DELETE FROM newsletter_subscribers WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            break;
    }
    
    // Redirect to refresh the page
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Get statistics
$stats = $pdo->query("SELECT 
    (SELECT COUNT(*) FROM contact_submissions) as total_contacts,
    (SELECT COUNT(*) FROM contact_submissions WHERE status = 'new') as new_contacts,
    (SELECT COUNT(*) FROM newsletter_subscribers WHERE status = 'active') as active_subscribers")->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - EnvisionXperts</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .status-new { color: #dc3545; font-weight: bold; }
        .status-read { color: #ffc107; font-weight: bold; }
        .status-replied { color: #198754; font-weight: bold; }
        .status-active { color: #198754; font-weight: bold; }
        .status-unsubscribed { color: #6c757d; font-weight: bold; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand">EnvisionXperts Admin Panel</span>
            <div class="navbar-nav ms-auto">
                <a href="?logout=1" class="nav-link">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Statistics -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Total Contacts</h5>
                        <h2><?= $stats['total_contacts'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">New Messages</h5>
                        <h2><?= $stats['new_contacts'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Active Subscribers</h5>
                        <h2><?= $stats['active_subscribers'] ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Submissions -->
        <div class="card mb-4">
            <div class="card-header">
                <h5><i class="fas fa-envelope me-2"></i>Contact Form Submissions</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contacts = $pdo->query("SELECT * FROM contact_submissions ORDER BY created_at DESC LIMIT 50")->fetchAll();
                            foreach ($contacts as $contact):
                            ?>
                            <tr>
                                <td><?= date('M j, Y g:i A', strtotime($contact['created_at'])) ?></td>
                                <td><?= htmlspecialchars($contact['name']) ?></td>
                                <td><a href="mailto:<?= htmlspecialchars($contact['email']) ?>"><?= htmlspecialchars($contact['email']) ?></a></td>
                                <td>
                                    <span data-bs-toggle="tooltip" title="<?= htmlspecialchars($contact['subject']) ?>">
                                        <?= htmlspecialchars(substr($contact['subject'], 0, 30)) ?><?= strlen($contact['subject']) > 30 ? '...' : '' ?>
                                    </span>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" title="<?= htmlspecialchars($contact['message']) ?>">
                                        <?= htmlspecialchars(substr($contact['message'], 0, 50)) ?><?= strlen($contact['message']) > 50 ? '...' : '' ?>
                                    </span>
                                </td>
                                <td><span class="status-<?= $contact['status'] ?>"><?= ucfirst($contact['status']) ?></span></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <?php if ($contact['status'] === 'new'): ?>
                                            <form method="POST" style="display: inline;">
                                                <input type="hidden" name="action" value="mark_read">
                                                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                                <button type="submit" class="btn btn-outline-warning btn-sm" title="Mark as Read">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        <?php if ($contact['status'] !== 'replied'): ?>
                                            <form method="POST" style="display: inline;">
                                                <input type="hidden" name="action" value="mark_replied">
                                                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                                <button type="submit" class="btn btn-outline-success btn-sm" title="Mark as Replied">
                                                    <i class="fas fa-reply"></i>
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        <form method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this submission?')">
                                            <input type="hidden" name="action" value="delete_contact">
                                            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Newsletter Subscribers -->
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-users me-2"></i>Newsletter Subscribers</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Email</th>
                                <th>IP Address</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $subscribers = $pdo->query("SELECT * FROM newsletter_subscribers ORDER BY subscribed_at DESC")->fetchAll();
                            foreach ($subscribers as $subscriber):
                            ?>
                            <tr>
                                <td><?= date('M j, Y g:i A', strtotime($subscriber['subscribed_at'])) ?></td>
                                <td><a href="mailto:<?= htmlspecialchars($subscriber['email']) ?>"><?= htmlspecialchars($subscriber['email']) ?></a></td>
                                <td><?= htmlspecialchars($subscriber['ip_address']) ?></td>
                                <td><span class="status-<?= $subscriber['status'] ?>"><?= ucfirst($subscriber['status']) ?></span></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <?php if ($subscriber['status'] === 'active'): ?>
                                            <form method="POST" style="display: inline;">
                                                <input type="hidden" name="action" value="unsubscribe">
                                                <input type="hidden" name="id" value="<?= $subscriber['id'] ?>">
                                                <button type="submit" class="btn btn-outline-warning btn-sm" title="Unsubscribe">
                                                    <i class="fas fa-user-times"></i>
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        <form method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this subscriber?')">
                                            <input type="hidden" name="action" value="delete_subscriber">
                                            <input type="hidden" name="id" value="<?= $subscriber['id'] ?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Email Logs -->
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-envelope me-2"></i>Email Logs & System Events</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Timestamp</th>
                                <th>Event Type</th>
                                <th>Details</th>
                                <th>IP Address</th>
                                <th>User Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $logs = $pdo->query("SELECT * FROM email_logs ORDER BY created_at DESC LIMIT 100")->fetchAll();
                            foreach ($logs as $log):
                                $eventData = json_decode($log['event_data'], true);
                            ?>
                            <tr>
                                <td style="font-size: 0.85em;"><?= date('M j, Y g:i:s A', strtotime($log['created_at'])) ?></td>
                                <td>
                                    <span class="badge bg-<?=
                                        strpos($log['event_type'], 'success') !== false || strpos($log['event_type'], 'completed') !== false ? 'success' :
                                        (strpos($log['event_type'], 'error') !== false || strpos($log['event_type'], 'failed') !== false ? 'danger' :
                                        (strpos($log['event_type'], 'sending') !== false ? 'warning' : 'info'))
                                    ?>" style="font-size: 0.75em;">
                                        <?= ucwords(str_replace('_', ' ', $log['event_type'])) ?>
                                    </span>
                                </td>
                                <td style="font-size: 0.85em;">
                                    <?php if ($eventData): ?>
                                        <details>
                                            <summary style="cursor: pointer; font-weight: 500;">
                                                <?= isset($eventData['submission_id']) ? "Submission #{$eventData['submission_id']}" :
                                                    (isset($eventData['to']) ? "To: {$eventData['to']}" :
                                                    (isset($eventData['success']) ? "Result: {$eventData['success']}" : 'Click to expand')) ?>
                                            </summary>
                                            <pre style="font-size: 0.75em; margin-top: 5px; white-space: pre-wrap; word-break: break-word;"><?php
                                                // Format the JSON data nicely
                                                echo htmlspecialchars(json_encode($eventData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                                            ?></pre>
                                        </details>
                                    <?php else: ?>
                                        <em>No additional data</em>
                                    <?php endif; ?>
                                </td>
                                <td style="font-size: 0.8em; font-family: monospace;"><?= htmlspecialchars($log['ip_address']) ?></td>
                                <td style="font-size: 0.75em; max-width: 200px; overflow: hidden; text-overflow: ellipsis;" title="<?= htmlspecialchars($log['user_agent']) ?>">
                                    <?= htmlspecialchars(substr($log['user_agent'], 0, 50)) ?><?= strlen($log['user_agent']) > 50 ? '...' : '' ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php if (empty($logs)): ?>
                    <div class="text-center text-muted mt-3">
                        <i class="fas fa-inbox fa-2x mb-2"></i>
                        <p>No email logs yet. Logs will appear here as emails are processed.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>
