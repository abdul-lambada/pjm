<?php
// 1. Memulai Session jika belum ada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Menyertakan koneksi database dan fungsi helper
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/functions.php';

// 3. Redirect jika belum login
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Menggunakan path absolut untuk menghindari masalah direktori
    header('Location: /pjm/login.php');
    exit();
}
