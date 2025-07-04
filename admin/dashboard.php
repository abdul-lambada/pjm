<?php
// Dashboard content
$content = '<div class="dashboard-welcome">
    <h1>Selamat Datang di Admin Panel</h1>
    <p>Kelola data website Anda dengan mudah dan cepat.</p>
</div>
<div class="dashboard-cards">
    <div class="dashboard-card">
        <h2>Berita</h2>
        <p>Kelola berita terbaru</p>
        <a href="/admin/berita/">Lihat</a>
    </div>
    <div class="dashboard-card">
        <h2>Galeri</h2>
        <p>Kelola galeri foto</p>
        <a href="/admin/galeri/">Lihat</a>
    </div>
    <div class="dashboard-card">
        <h2>Lowongan</h2>
        <p>Kelola lowongan kerja</p>
        <a href="/admin/lowongan/">Lihat</a>
    </div>
    <div class="dashboard-card">
        <h2>Proyek</h2>
        <p>Kelola proyek berjalan</p>
        <a href="/admin/proyek/tambah_proyek.php">Lihat</a>
    </div>
</div>';
include 'includes/layout.php';
?>
