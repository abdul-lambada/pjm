<?php
/**
 * Template Halaman Publik Utama
 * File ini menggabungkan header, konten dinamis, dan footer.
 */

// Memuat header (termasuk navigasi dan semua tag <head>)
require_once __DIR__ . '/../includes/header.php';

// Menampilkan konten unik halaman yang di-passing melalui variabel $main_content
if (isset($main_content)) {
    echo $main_content;
} else {
    echo '<main class="main"><div class="container"><p>Konten tidak tersedia.</p></div></main>';
}

// Memuat footer (termasuk semua skrip JS)
require_once __DIR__ . '/../includes/footer.php';

