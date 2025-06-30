<?php
/**
 * Template Halaman Publik Utama
 * Best practice: Struktur HTML lengkap, modular, dan aman.
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <?php require_once __DIR__ . '/../includes/head.php'; ?>
</head>
<body class="<?php echo (basename($_SERVER['SCRIPT_NAME']) === 'service.php') ? 'service-page' : 'index-page'; ?>">
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <?php
    // Tampilkan konten utama, gunakan htmlspecialchars jika konten dari user
    if (isset($main_content)) {
        echo $main_content;
    } else {
        echo '<main class="main"><div class="container"><p>Konten tidak tersedia.</p></div></main>';
    }
    ?>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
    <?php require_once __DIR__ . '/../includes/scripts.php'; ?>
</body>
</html>
