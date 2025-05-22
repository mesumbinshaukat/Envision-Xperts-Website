<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'EnvisionXperts' ?></title>
    <link rel="stylesheet" href="/envisionxperts.com/public/assets/css/style.css">
    <script src="https://unpkg.com/gsap@3.12.0/dist/gsap.min.js"></script>
</head>
<body class="min-h-screen bg-gray-900 text-gray-100 flex flex-col">
    <?php include __DIR__ . '/navbar.php'; ?>
    
    <main class="flex-grow container mx-auto px-4 py-8">
        <?= $content ?? '' ?>
    </main>

    <?php include __DIR__ . '/footer.php'; ?>

    <script src="/envisionxperts.com/public/assets/js/main.js"></script>
</body>
</html> 