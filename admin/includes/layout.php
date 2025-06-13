<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?= $title ?></title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="d-flex min-vh-100">
        <!-- Sidebar (offcanvas for mobile, flex for desktop) -->
        <?php include __DIR__.'/sidebar.php'; ?>
        <!-- Page Content -->
        <div id="page-content-wrapper" class="flex-grow-1 d-flex flex-column">
            <!-- Top Navigation -->
            <?php include __DIR__.'/navbar.php'; ?>
            <!-- Main Content -->
            <div class="container-fluid flex-grow-1 px-3 py-4">
                <?= $content ?>
            </div>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="/pjm/assets/js/admin.js"></script>
</body>
</html>
