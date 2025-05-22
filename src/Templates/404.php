<?php ob_start(); ?>

<div class="min-h-[60vh] flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-emerald-500 mb-4">404</h1>
        <h2 class="text-2xl font-semibold text-white mb-4">Page Not Found</h2>
        <p class="text-gray-300 mb-8">The page you're looking for doesn't exist or has been moved.</p>
        <a href="/envisionxperts.com" class="btn-primary">
            Return Home
        </a>
    </div>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/layout/base.php';
?> 