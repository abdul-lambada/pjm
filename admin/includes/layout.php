<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" href="/pjm/assets/img/favicon.ico">
    <script src="/pjm/assets/vendor/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="/pjm/admin/assets/css/admin-style.css">
</head>
<body>
    <div class="admin-wrapper">
        <?php include 'navbar.php'; ?>
        <div class="admin-main">
            <?php include 'sidebar.php'; ?>
            <main class="admin-content">
                <!-- Konten utama akan dimuat di sini oleh file lain -->
                <?php if (isset($content)) { echo $content; } ?>
            </main>
        </div>
    </div>
    <script src="/pjm/admin/assets/js/admin.js"></script>
</body>
</html>
