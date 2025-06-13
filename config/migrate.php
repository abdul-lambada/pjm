<?php
// Memanggil file konfigurasi database
require_once __DIR__ . '/database.php';

// SQL untuk membuat tabel 'projects'
$sql_projects = "CREATE TABLE IF NOT EXISTS `projects` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `client` VARCHAR(255) NOT NULL,
    `location` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `images` TEXT NOT NULL COMMENT 'Simpan path gambar dalam format JSON',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

// SQL untuk membuat tabel 'news'
$sql_news = "CREATE TABLE IF NOT EXISTS `news` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `featured_image` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

// Eksekusi query dan cek keberhasilan
if ($conn->query($sql_projects) === TRUE) {
    echo "Tabel 'projects' berhasil dibuat atau sudah ada.\n";
} else {
    echo "Error saat membuat tabel 'projects': " . $conn->error . "\n";
}

if ($conn->query($sql_news) === TRUE) {
    echo "Tabel 'news' berhasil dibuat atau sudah ada.\n";
} else {
    echo "Error saat membuat tabel 'news': " . $conn->error . "\n";
}

// Menutup koneksi
$conn->close();
?>
