<?php
session_start();
require_once '../config/database.php';

// Simple authentication (you can enhance this later)
$admin_password = 'admin123'; // Change this to a secure password
$is_authenticated = false;

if (isset($_POST['password']) && $_POST['password'] === $admin_password) {
    $is_authenticated = true;
    $_SESSION['admin_authenticated'] = true;
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
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <span data-bs-toggle="tooltip" title="<?= htmlspecialchars($contact['message']) ?>">
                                        <?= htmlspecialchars(substr($contact['subject'], 0, 50)) ?><?= strlen($contact['subject']) > 50 ? '...' : '' ?>
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
