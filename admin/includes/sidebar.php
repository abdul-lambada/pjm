<?php
// Deteksi base path dinamis, hanya ambil path project (misal: /pjm), bukan /pjm/admin
$basePath = dirname($_SERVER['SCRIPT_NAME'], 2);
$basePath = preg_replace('#/admin$#', '', $basePath); // hapus /admin di akhir jika ada
if ($basePath === DIRECTORY_SEPARATOR) $basePath = '';
$current = basename($_SERVER['PHP_SELF']);
?>
<aside class="admin-sidebar" id="adminSidebar">
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>
    <ul class="sidebar-menu">
        <li><a href="<?php echo $basePath; ?>/admin/dashboard.php"<?php if($current=='dashboard.php') echo ' class="active"'; ?>>Dashboard</a></li>
        <li><a href="<?php echo $basePath; ?>/admin/berita/berita.php"<?php if($current=='berita.php') echo ' class="active"'; ?>>Berita</a></li>
        <li><a href="<?php echo $basePath; ?>/admin/galeri/galeri.php"<?php if($current=='galeri.php') echo ' class="active"'; ?>>Galeri</a></li>
        <li><a href="<?php echo $basePath; ?>/admin/proyek/tambah_proyek.php"<?php if($current=='tambah_proyek.php') echo ' class="active"'; ?>>Proyek</a></li>
        <li><a href="<?php echo $basePath; ?>/admin/profile.php"<?php if($current=='profile.php') echo ' class="active"'; ?>>Profile</a></li>
        <li><a href="<?php echo $basePath; ?>/admin/logout.php">Logout</a></li>
    </ul>
</aside>
