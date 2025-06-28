<?php
// Konfigurasi Database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // Default XAMPP username
// define('DB_PASSWORD', '');     // Default XAMPP password (kosong)
// define('DB_PASSWORD', 'root'); // Default Laragon MySQL password
// define('DB_PASSWORD', '');     // Default XAMPP password (kosong)
// define('DB_PASSWORD', 'root'); // Default Laragon MySQL password
// Silakan sesuaikan password dengan konfigurasi MySQL Anda
define('DB_PASSWORD', '');
define('DB_NAME', 'pjm_db');         // Ganti dengan nama database Anda

// Mencoba terhubung ke database MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Cek koneksi
if($conn === false){
    die("ERROR: Tidak dapat terhubung ke database. " . mysqli_connect_error());
}

// Set charset ke utf8
mysqli_set_charset($conn, "utf8");

// Konfigurasi dasar
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/pjm';
?>
