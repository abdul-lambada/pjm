<?php
// Konfigurasi Database
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'pjm_db';

// 1. Koneksi ke MySQL tanpa memilih database
$conn_init = new mysqli($host, $user, $pass);

// Cek koneksi awal
if ($conn_init->connect_error) {
    die("Koneksi ke MySQL gagal: " . $conn_init->connect_error);
}

// 2. Buat database jika belum ada
$sql_create_db = "CREATE DATABASE IF NOT EXISTS `$db_name`";
if (!$conn_init->query($sql_create_db)) {
    die("Gagal membuat database: " . $conn_init->error);
}

// Tutup koneksi awal
$conn_init->close();

// 3. Koneksi ke database 'pjm' yang sudah pasti ada
$conn = new mysqli($host, $user, $pass, $db_name);

// Cek koneksi ke database
if ($conn->connect_error) {
    die("Koneksi ke database '$db_name' gagal: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8mb4");
